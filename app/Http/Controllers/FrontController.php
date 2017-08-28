<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Genero;
use App\Archivo;

class FrontController extends Controller
{
    public function inicio(){
        return view('publico.inicio');
    }
    public function administrador($usuario_id = 1){
        $archivos = Archivo::where('usuario_id', $usuario_id)->get();
        return view('admin.administrador')->with(['archivos' => $archivos]);
    }

    public static function generos(){
        $generos = Cache::remember('generos', 60, function(){
                return Genero::all();
        });

        return $generos;
    }
}
