<?php

namespace App\Http\Controllers;

use App\Models\Colonias;
use Illuminate\Http\Request;

class ColoniasController extends Controller
{
    public function colonias()
    {
        $nombre = Colonias::all();
        $argumentos = array();
        $argumentos["colonias"] = $nombre;        
        return view("colonias", $argumentos);

    }

    public function create()
    {   
        return view('createcolonias');
    }

    public function editar($id)
    {
        $colonias = Colonias::find($id);
        $argumentos = array();
        $argumentos["colonias"] = $colonias;
        return view("editarcolonia",$argumentos);
    }

    public function confirmdelete($id) {
        $nombre = Colonias::find($id);

        $argumentos = array();
        $argumentos["colonias"] = $nombre;

        return view("confirmdelete", $argumentos);
    }
    
    public function destroy($id) {
        $colonia = Colonias::find($id);
        if ($colonia) {
            $colonia->delete();
            return redirect()->route("colonias")->with("exito", "se pudo eliminar la colonia");
        }
        return redirect()->route("colonias")->with("error", "no se eliminó correctamente");
    }

    public function storecolonias(Request $request)
    {
        $nuevaColonia = new Colonias();

        $nuevaColonia->nombre = $request->input("nombre");

     

        if($nuevaColonia->save())
        {
            $nombre = Colonias::all();
            $argumentos = array();
            $argumentos["colonias"] = $nombre;
            return view("colonias", $argumentos);

        }


    }

    public function actualizar(Request $request, $id)
    {
        $colonias = Colonias::find($id);

        $request->validate([
            'nombre' => 'required',
   
        ]);

       

        $colonias->nombre = $request->input("nombre");


        if($colonias->save())
        {
            return redirect()->route("colonias",$id)->with("exito", "Se actualizó correctamente la colonia");
        }
        return redirect()->route("colonias",$id)->with("error", "No se ha podio actualizar la colonia");
    }
}