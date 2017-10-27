<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Genero;
use App\Archivo;
use App\Usuario;


class FrontController extends Controller
{
    public function inicio(){
        return view('publico.inicio');
    }
    public function administrador($usuario_id = 1){
        $archivos = Archivo::all();
        $generos = Genero::all();
        $usuarios = Usuario::all();
        return view('admin.administrador')->with(['archivos' => $archivos, 'generos'=>$generos, 'usuarios'=>$usuarios]);
    }

    public static function generos(){
        $generos = Cache::remember('generos', 60, function(){
                return Genero::all();
        });

        return $generos;
    }
}
