<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;

class TagsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function widgets() {
        $descripcion = Tags::all();
        $argumentos = array();
        $argumentos["tags"] = $descripcion;

        //$tags = Tags::whereMonth('registered_at', '>=', '04')->get();
       // $tags = Tags::whereYear('registered_at', '2021')->get();

        return view('widgets', $argumentos);
    }

    public function tags(Request $request)
    {
        //$descripcion = Tags::all();
        //$argumentos = array();
        //$argumentos["tags"] = $descripcion;
        
        if($request) {
           $query = trim($request->get('search'));
            $tags = Tags::where('descripcion', 'LIKE', '%' . $query . '%')
                ->orderBy('id', 'asc')
                ->get();
            return view("tags", ['tags' => $tags, 'search' => $query]);
        }

        
        //return view("tags", $argumentos);

    }

    public function busquedastags() {
        
    }

    public function confirmdelete($id) {
        $descripcion = Tags::find($id);

        $argumentos = array();
        $argumentos["tags"] = $descripcion;

        return view("confirmdelete", $argumentos);
    }
    
    public function destroy($id) {
        $tag = Tags::find($id);
        if ($tag) {
            $tag->delete();
            return redirect()->route("tags")->with("exito", "se pudo eliminar el tag");
        }
        return redirect()->route("tags")->with("error", "no se eliminó correctamente");
    }

    public function create()
    {   
        return view('createtags');
    }

    public function store(Request $request)
    {
        $nuevoTag = new Tags();

        $nuevoTag->descripcion = $request->input("descripcion");

     

        if($nuevoTag->save())
        {
            $descripcion = Tags::all();
            $argumentos = array();
            $argumentos["tags"] = $descripcion;
            return view("tags", $argumentos);

        }


    }
    
    public function editar($id)
    {
        $tags = Tags::find($id);
        $argumentos = array();
        $argumentos["tags"] = $tags;
        return view("editartag",$argumentos);
    }

    public function actualizar(Request $request, $id)
    {
        $tags = Tags::find($id);

        $request->validate([
            'descripcion' => 'required',
   
        ]);

       

        $tags->descripcion = $request->input("descripcion");


        if($tags->save())
        {
            return redirect()->route("tags",$id)->with("exito", "Se actualizó correctamente el tag");
        }
        return redirect()->route("tags",$id)->with("error", "No se ha podio actualizar el tag");
    }
}
