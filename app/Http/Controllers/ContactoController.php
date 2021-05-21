<?php

namespace App\Http\Controllers;

use App\Models\organization;
use App\Models\Tags;
use App\Models\Colonias;
use App\Models\tags_organizacion;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listarContacto()
    {
        $contactos = organization::all();
        $tags = tags::all();
        $colonias = Colonias::all();
        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        $argumentos["tags"] = $tags;
        $argumentos["colonias"] = $colonias;

        return view("contactoList",$argumentos);
    }

    public function bajaContacto($id)
    {
        $contactos = organization::find($id);

        $argumentos = array();
        $argumentos["contactos"] = $contactos;

        if($contactos->activo == 0)
        {
            $argumentos['activo'] = 1;
        }else{
            $argumentos['activo'] = 0;
        }
        

        //$argumentos->update(['activo' => '0']);
        $contactos->update($argumentos);
        if($argumentos['activo'] == 0){
            
            return redirect()->route("listarContacto")->with("exito", "Se dio de baja a $contactos->nombre");
        }if($argumentos['activo'] == 1){
            return redirect()->route("listarContacto")->with("exito2", "Se dio de alta a $contactos->nombre");
        }

        return redirect()->route("listarContacto")->with("error", "no se revoco el usuario");
    }

    public function bajaTag($id)
    {
        $tag = organization::find($id);

        $argumentos = array();
        $argumentos["tag"] = $tag;

        if($tag->activo == 0)
        {
            $argumentos['activo'] = 1;
        }else{
            $argumentos['activo'] = 0;
        }
        

        //$argumentos->update(['activo' => '0']);
        $contactos->update($argumentos);
        if($argumentos['activo'] == 0){
            
            return redirect()->route("listarContacto")->with("exito", "Se dio de baja a $contactos->nombre");
        }if($argumentos['activo'] == 1){
            return redirect()->route("listarContacto")->with("exito2", "Se dio de alta a $contactos->nombre");
        }

        return redirect()->route("listarContacto")->with("error", "no se revoco el usuario");
    }

    public function actualizarContacto(Request $request,$id)
    {
        $contactos = organization::find($id);

        $tags  = new tags_organizacion();
        
        $contactos->nombre = $request->input("nombre");
        $contactos->objetosocial = $request->input("objetoSocial");
        $contactos->presidente = $request->input("presidente");
        $contactos->represetantelegal = $request->input("representanteLegal");
        $contactos->director = $request->input("director");
        $contactos->domicilio = $request->input("domicilio");
        $contactos->colonia = $request->input("colonia");
        $contactos->telefono = $request->input("telefono");
        $contactos->email = $request->input("email");
        $contactos->sitioweb = $request->input("sitioWeb");
        $contactos->facebook = $request->input("facebook");
        $contactos->instagram = $request->input("instagram");
        $contactos->twitter = $request->input("twitter");
        $contactos->fecha_vigencia = $request->input("fecha_vigencia");
        
        if($contactos->save())
        {
            dd($tags);
            $tags->id_tag = $request->input("tag");
            $tags->id_organizacion = $contactos->id;
            if($tags->save())
            {
            
                return redirect()->route("listarContacto",$id)->with("exito", "Se actualizó correctamente la organizacion");
            }
           
        }
        return redirect()->route("listarContacto",$id)->with("error", "No se ha podio actualizar  la organizacion");


    }
    
    public function consultarContacto($id)
    {
        $contactos = organization::find($id);
        $tags = tags_organizacion::select("tags_organizacion.id_tag", "tags.descripcion")->
        leftjoin("organizations", "tags_organizacion.id_organizacion", "organizations.id")->
        leftjoin("tags", "tags.id", "tags_organizacion.id_tag")->
        where("tags_organizacion.id_organizacion", $id)->get();

        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        $argumentos["tags"] = $tags;
        return view("contactoShow",$argumentos);
    }

    public function editarContacto($id)
    {
        $contactos = organization::find($id);
        $tags = Tags::all();
        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        $argumentos["tags"] = $tags;
        return view("contactoedit", $argumentos);
        

    }

    
    
    
    
    public function crearContacto()
    {
        $contactos = organization::all();
        $tags = Tags::all();
        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        $argumentos["tags"] = $tags;

        return view("contactoCreate",$argumentos);
    }
    
    public function guardarContacto(Request $request)
    {
        $nuevoContacto = new organization();
        $tags = new tags_organizacion();
        //dd($nuevoContacto->id);
        
        $nuevoContacto->nombre = $request->input("nombre");
        $nuevoContacto->objetosocial = $request->input("objetoSocial");
        $nuevoContacto->presidente = $request->input("presidente");
        $nuevoContacto->represetantelegal = $request->input("representanteLegal");
        $nuevoContacto->director = $request->input("director");
        $nuevoContacto->domicilio = $request->input("domicilio");
        $nuevoContacto->colonia = $request->input("colonia");
        $nuevoContacto->telefono = $request->input("telefono");
        $nuevoContacto->email = $request->input("email");
        $nuevoContacto->sitioweb = $request->input("sitioWeb");
        $nuevoContacto->facebook = $request->input("facebook");
        $nuevoContacto->instagram = $request->input("instagram");
        $nuevoContacto->twitter = $request->input("twitter");
        $nuevoContacto->fecha_vigencia = $request->input("fecha_vigencia");
        

        if($nuevoContacto->save())
        {
            $tags->id_tag = $request->input("tag");
            $tags->id_organizacion = $nuevoContacto->id;
            if($tags->save())
            {
                return redirect()->route("listarContacto")->with("exito", "Se agregó el usuario $nuevoContacto->name exitosamente");
            }
        }

        return redirect()->route("listarContacto")->with("error", "no se pudo agregar el usuario");
    }

    public function searchFilter(Request $request)
    {
        $filter = $request->input("tag");
        $tags = Tags::where("descripcion", $filter);
        if($tags == null){
            return redirect();
        }
        else{
            $organizaciones = organization::select('organizations.id', 'organizations.nombre', 'organizations.presidente', 'organizations.director', 
            'organizations.email', 'organizations.fecha_vigencia', 'organizations.activo')->
            leftjoin("tags_organizacion", "tags_organizacion.id_organizacion", "organizations.id")->
            where("tags_organizacion.id_tag", $filter)->get();
            $tags = Tags::all();
            $colonias = Colonias::all();

            $argumentos = array();
            $argumentos["contactos"] = $organizaciones;
            $argumentos["tags"] = $tags;
            $argumentos["colonias"] = $colonias;
            return view("contactoList",$argumentos);
        }
    }

    

}
