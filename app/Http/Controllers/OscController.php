<?php

namespace App\Http\Controllers;

use App\Models\OSC;
use Illuminate\Http\Request;

class OscController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listaOSC()
    {
        $OSCs = OSC::all();
        $argumentos=array();
        $argumentos["OSCs"] = $OSCs;
        return view("oscList",$argumentos);
    }
    
    public function crearOSC()
    {
        return view("oscCreate");
    }
    
    public function guardarOSC(Request $request)
    {
        $nuevoOSC = new OSC();

        
        $nuevoOSC->id_organizacion = $request->input("id_organizacion");
        $nuevoOSC->nombre = $request->input("nombre");
        $nuevoOSC->oficina = $request->input("oficina");
        $nuevoOSC->celular = $request->input("celular");
        $nuevoOSC->correo = $request->input("correo");

        if($nuevoOSC->save())
        {
            return redirect()->route("listaOSC")->with("exito", "Se agregó el usuario $nuevoOSC->name exitosamente");
        }

        return redirect()->route("listaOSC")->with("error", "no se pudo agregar el usuario");
    }

}
