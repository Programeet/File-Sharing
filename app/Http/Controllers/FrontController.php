<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function inicio(){
        return view('publico.inicio');
    }
    public function administrador(){
        return view('admin.administrador');
    }
}
