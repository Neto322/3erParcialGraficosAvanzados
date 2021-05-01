<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
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
        $argumentos=array();
        $argumentos["contactos"] = $contactos;
        return view("contactoList",$argumentos);
    }

    public function baja()
    {
        
    }
    
    public function crearContacto()
    {
        return view("contactoCreate");
    }
    
    public function guardarContacto(Request $request)
    {
        $nuevoContacto = new Contacto();
        
        $nuevoContacto->nombre = $request->input("nombre");
        $nuevoContacto->oficina = $request->input("oficina");
        $nuevoContacto->celular = $request->input("celular");
        $nuevoContacto->correo = $request->input("correo");

        

        if($nuevoContacto->save())
        {
            return redirect()->route("listaContacto")->with("exito", "Se agregó el usuario $nuevoContacto->name exitosamente");
        }

        return redirect()->route("listaContacto")->with("error", "no se pudo agregar el usuario");
    }

}
