<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Genero;

class FrontController extends Controller
{
    public function inicio(){
        return view('publico.inicio');
    }
    public function administrador(){
        return view('admin.administrador');
    }

    public static function generos(){
        $generos = Cache::remember('generos', 60, function(){
                return Genero::all();
        });

        return $generos;
    }
}
