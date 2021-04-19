<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;

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

    public function revocar($id)
    {

        $usuarios = User::find($id);

        $argumentos = array();
        $argumentos["usuarios"] = $usuarios;

        $argumentos->update(['activo' => '0']);
        if($noticia->activo == 0){
            
            return redirect()->route("lista")->with("exito", "Se revoco el usuario");
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

    public function tags()
    {
        $descripcion = Tags::all();
        $argumentos = array();
        $argumentos["tags"] = $descripcion;
        return view("tags", $argumentos);

    }
    public function confirmdelete($id) {
        $descripcion = Tags::find($id);

        $argumentos = array();
        $argumentos["tags"] = $descripcion;

        return view("confirmdelete", $argumentos);
    }
    
    public function destroy($id) {
        $descripcion = Tags::find($id);
        if ($tag) {
            $tag->delete();
            return redirect()->route("tags")->with("error", "No se pudo eliminar el tag");
        }
        return redirect()->route("tags")->with("exito", "se eliminó correctamente");
    }

    
}
