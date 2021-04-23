<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
        
    }

    public function guardar(Request $request)
    {
        $usuarios = new User();
        $usuarios->id_tipo_usuario = $request->input("id_tipo_usuario");
        $usuarios->activo = $request->input("activo");
    }

    public function revocar($id)
    {
        $usuarios = User::find($id);

        $argumentos = array();
        $argumentos["usuarios"] = $usuarios;

        if($usuarios->activo == 0)
        {
            $argumentos['activo'] = 1;
        }else{
            $argumentos['activo'] = 0;
        }
        

        //$argumentos->update(['activo' => '0']);
        $usuarios->update($argumentos);
        if($argumentos['activo'] == 0){
            
            return redirect()->route("lista")->with("exito", "Se revoco el usuario");
        }if($argumentos['activo'] == 1){
            return redirect()->route("lista")->with("exito2", "Se dio acceso al usuario");
        }

        return redirect()->route("lista")->with("error", "no se revoco el usuario");
    }
    
    public function lista()
    {   
        $usuarios = User::all();
        $argumentos=array();
        $argumentos["usuarios"] = $usuarios;
        return view('lista', $argumentos);
    }

    public function create()
    {   
        return view('auth/register');
    }
    
}
