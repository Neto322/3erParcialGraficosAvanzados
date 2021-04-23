<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tags;

class TagsController extends Controller
{
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
