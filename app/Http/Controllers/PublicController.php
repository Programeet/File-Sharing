<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function canciones(){
        $canciones = Archivo::orderBy('fecha_subida', 'desc')
                    ->paginate(10);
        return view('publico.inicio')->with(['canciones' => $canciones]);
    }
}