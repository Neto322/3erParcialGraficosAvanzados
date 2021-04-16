<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TableroController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
     }

    public function tablero(){
        return view('index');
    }
}
