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
        $contactos = organization::select('organizations.id', 'organizations.nombre', 'organizations.presidente', 'organizations.director', 
            'organizations.email', 'organizations.fecha_vigencia', 'organizations.activo', "colonias.nombre as colonia")->
            leftjoin("colonias", "colonias.id", "organizations.colonia")->
            get();
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

    public function quitarTag($id) {
        $tag = tags_organizacion::find($id);
        if ($tag) {
            $tag->delete();
            return redirect()->route("consultarContacto", $tag->id_organizacion)->with("exito", "se pudo eliminar el tag");
        }
        return redirect()->route("consultarContacto", $tag->id_organizacion)->with("error", "no se eliminó correctamente");
    }
    
    public function actualizarContacto(Request $request,$id)
    {
        $contactos = organization::find($id);

        $tags  = new tags_organizacion();
        $colonias  = new Colonias();
        
        $contactos->nombre = $request->input("nombre");
        $contactos->objetosocial = $request->input("objetoSocial");
        $contactos->presidente = $request->input("presidente");
        $contactos->represetantelegal = $request->input("representanteLegal");
        $contactos->director = $request->input("director");
        $contactos->domicilio = $request->input("domicilio");
        $contactos->telefono = $request->input("telefono");
        $contactos->email = $request->input("email");
        $contactos->sitioweb = $request->input("sitioWeb");
        $contactos->facebook = $request->input("facebook");
        $contactos->instagram = $request->input("instagram");
        $contactos->twitter = $request->input("twitter");
        $contactos->fecha_vigencia = $request->input("fecha_vigencia");
        
        if($contactos->save())
        {
            
            $tags->id_tag = $request->input("tag");
            $tags->id_organizacion = $contactos->id;
            if($tags->save())
            {
                $colonias->nombre = $request->input("colonia");           
                if($colonias->save())
                {
                    return redirect()->route("listarContacto",$id)->with("exito", "Se actualizó correctamente la organizacion");
                }
            }
            
           
        }
        return redirect()->route("listarContacto",$id)->with("error", "No se ha podio actualizar  la organizacion");


    }
    
    public function consultarContacto($id)
    {
        $contactos = organization::find($id);
        $tags = tags_organizacion::select("tags_organizacion.id", "tags.descripcion")->
        leftjoin("organizations", "tags_organizacion.id_organizacion", "organizations.id")->
        leftjoin("tags", "tags.id", "tags_organizacion.id_tag")->
        where("tags_organizacion.id_organizacion", $id)->get();

        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        $argumentos["tags"] = $tags;
        return view("contactoShow",$argumentos);
    }

    public function agregarTag($id){
        
        $contactos = organization::find($id);
        $tags = Tags::all();
        
        $argumentos = array();
        $argumentos["tags"] = $tags;
        $argumentos["contactos"] = $contactos;
        return view("addtags",$argumentos);
    }

    public function guardarTag(Request $request){
        $tags = new tags_organizacion;

        $tags->id_tag = $request->input("tag");
        $tags->id_organizacion = $request->input("organizacion");

        if($tags->save())
        {                
            return redirect()->route("consultarContacto", $tags->id_organizacion);
        }
                    

        return redirect()->route("listarContacto", $tags->id_organizacion)->with("error", "no se pudo agregar el tag");
    }

    public function editarContacto($id)
    {
        $contactos = organization::find($id);
        $tags = Tags::all();
        $colonias = Colonias::select("colonias.nombre as nombre")->where("colonias.id", $contactos->colonia)->first();

        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        $argumentos["tags"] = $tags;
        $argumentos["colonias"] = $colonias;
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
        $colonias  = new Colonias();
        //dd($nuevoContacto->id);
        
        $nuevoContacto->nombre = $request->input("nombre");
        $nuevoContacto->objetosocial = $request->input("objetoSocial");
        $nuevoContacto->presidente = $request->input("presidente");
        $nuevoContacto->represetantelegal = $request->input("representanteLegal");
        $nuevoContacto->director = $request->input("director");
        $nuevoContacto->domicilio = $request->input("domicilio");
        $nuevoContacto->telefono = $request->input("telefono");
        $nuevoContacto->email = $request->input("email");
        $nuevoContacto->sitioweb = $request->input("sitioWeb");
        $nuevoContacto->facebook = $request->input("facebook");
        $nuevoContacto->instagram = $request->input("instagram");
        $nuevoContacto->twitter = $request->input("twitter");
        $nuevoContacto->fecha_vigencia = $request->input("fecha_vigencia");

        $colonias->nombre = $request->input("colonia");
        if($colonias->save())
        {
            $nuevoContacto->colonia = $colonias->id;
            if($nuevoContacto->save())
            {
                $tags->id_tag = $request->input("tag");
                $tags->id_organizacion = $nuevoContacto->id;
                if($tags->save())
                {                
                    return redirect()->route("listarContacto")->with("exito", "Se agregó el usuario $nuevoContacto->name exitosamente");
                }
                    
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
            'organizations.email', 'organizations.fecha_vigencia', 'organizations.activo', "colonias.nombre as colonia")->
            leftjoin("tags_organizacion", "tags_organizacion.id_organizacion", "organizations.id")->
            leftjoin("colonias", "colonias.id", "organizations.colonia")->
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

    public function searchColonia(Request $request)
    {
        $filter = $request->input("colonia");
        $colonias = Colonias::where("nombre", $filter);
        if($colonias == null){
            return redirect();
        }
        else{
            $organizaciones = organization::select('organizations.id', 'organizations.nombre', 'organizations.presidente', 'organizations.director', 
            'organizations.email', 'organizations.fecha_vigencia', 'organizations.activo', "colonias.nombre as colonia")->
            leftjoin("colonias", "colonias.id", "organizations.colonia")->
            where("colonias.id", $filter)->
            get();
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
