<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Usuario;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function canciones(){
        $canciones = Archivo::orderBy('fecha_subida', 'desc')
                    ->paginate(10);
        return view('publico.inicio')->with(['canciones' => $canciones]);
    }
    public function descarga($archivo_id){
        $archivo = Archivo::with(['usuario','genero'])->find($archivo_id);
        // dd($archivo);
        return view('publico.descarga')->with(['data' => $archivo]);
    }
    public function usuario($user){
      $usuario = Usuario::find($user);
      return view('publico.usuario')->with(['archivos' => $usuario->archivos, 'usuario' =>$usuario->nick]);
    }
}
