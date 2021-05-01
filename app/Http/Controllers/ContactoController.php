<?php

namespace App\Http\Controllers;

use App\Models\organization;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listarContacto()
    {
        $contactos = Contacto::all();
        $argumentos = array();
        $argumentos["contactos"] = $contactos;
        return view("contactoList",$argumentos);
    }

    public function baja()
    {

    }

    public function editarContacto($id)
    {
        $cotacto = Contacto::find($id);

        $argumentos = array();
        $argumentos["contactos"]= $cotacto;

        return view("contactoedit", $argumentos);

    }
    
    public function crearContacto()
    {
        return view("contactoCreate");
    }
    
    public function guardarContacto(Request $request)
    {
        $nuevoContacto = new Contacto();
        
        $nuevoContacto->nombre = $request->input("nombre");
        $nuevoContacto->objetoSocial = $request->input("objetoSocial");
        $nuevoContacto->presidente = $request->input("presidente");
        $nuevoContacto->representanteLegal = $request->input("representanteLegal");
        $nuevoContacto->director = $request->input("director");
        $nuevoContacto->domicilio = $request->input("domicilio");
        $nuevoContacto->telefono = $request->input("telefono");
        $nuevoContacto->email = $request->input("email");
        $nuevoContacto->sitioWeb = $request->input("sitioWeb");
        $nuevoContacto->facebook = $request->input("facebook");
        $nuevoContacto->instagram = $request->input("instagram");
        $nuevoContacto->twitter = $request->input("twitter");

        if($nuevoContacto->save())
        {
            return redirect()->route("listaContacto")->with("exito", "Se agregó el usuario $nuevoContacto->name exitosamente");
        }

        return redirect()->route("listaContacto")->with("error", "no se pudo agregar el usuario");
    }

}
