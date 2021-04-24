<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



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

    public function editar($id)
    {
        $usuarios = User::find($id);
        $argumentos = array();
        $argumentos["usuarios"] = $usuarios;
        return view("editar",$argumentos);
    }

    public function actualizar(Request $request, $id)
    {
        $usuarios = User::find($id);

        $request->validate([
            'name' => 'required',
            'confirm_password' => 'same:password',
        ]);

        if($request->input("password") != $request->input("confirm_password"))
        {
            return redirect()->route("editar", $usuarios->id);
        }

        $usuarios->name = $request->input("name");

        if($request->input("password") != null)
        {
            $usuarios->password = Hash::make($request->input("password"));
        }

        if($usuarios->save())
        {
            return redirect()->route("editar",$id)->with("exito", "Se actualizó correctamente el usuario");
        }
        return redirect()->route("editar",$id)->with("error", "No se ha podio actualizar el usuario");
    }

    public function create()
    {   
        return view('create');
    }

    public function store(Request $request)
    {
        $nuevoUsuario = new User();

        $nuevoUsuario->name = $request->input("name");
        $nuevoUsuario->email = $request->input("email");
        $nuevoUsuario->password = $request->input("password");
        $nuevoUsuario->id_tipo_usuario = $request->input("id_tipo_usuario");
        $nuevoUsuario->activo = $request->input("activo");

        if($nuevoUsuario->save())
        {
            return redirect()->route("home")->with("exito", "Se agregó el usuario exitosamente");
        }

        return redirect()->route("home")->with("error", "no se pudo agregar el usuario");

    }
    
}
