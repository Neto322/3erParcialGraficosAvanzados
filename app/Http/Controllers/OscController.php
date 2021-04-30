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
        return view("oscList");
    }
    public function crearOSC()
    {
        return view("oscCreate");
    }

}
