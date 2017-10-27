<?php

namespace App\Http\Controllers;
use App\Usuario;
use App\Archivo;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index(){
     $usuarios = Usuario::all();
     return view('admin.usuarios')->with(['users'=>$usuarios]);
   }
   public function files($id){
     $user = Usuario::find($id);
     return view('admin.userfiles')->with(['user'=>$user]);
   }
   public function myfiles(){
     $archivos = Archivo::where('usuario_id', 1)->get();
     return view('admin.myfiles')->with(['files'=>$archivos]);
   }
}
