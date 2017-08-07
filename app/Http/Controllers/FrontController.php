<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function inicio(){
        return view('inicio');
    }
    public function administrador(){
        return view('administrador');
    }
}
