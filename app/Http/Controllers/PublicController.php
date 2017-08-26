<?php

namespace App\Http\Controllers;

use App\Archivo;
use App\Usuario;
use App\Genero;
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
        $archivos_genero = Archivo::where('genero_id', $archivo->genero->id)->get();
        return view('publico.descarga')->with(['data' => $archivo, 'archivos_genero' => $archivos_genero]);
    }
    public function usuario($user){
      $usuario = Usuario::find($user);
      return view('publico.usuario')->with(['archivos' => $usuario->archivos, 'usuario' =>$usuario->nick]);
    }

    public function genero($gen){
        $genero = Genero::with(['archivos'])->find($gen);
        return view('publico.genero')->with(['archivos' => $genero->archivos, 'nombre' => $genero->nombre]);
    }

    public function search(Request $request){
        $resp = Archivo::where('nombre', 'LIKE', '%'.$request->buscar.'%')->get();
        // dd($resp);
        return view('publico.busqueda')->with(['busqueda'=>$resp, 'buscado'=>$request->buscar]);
    }
}