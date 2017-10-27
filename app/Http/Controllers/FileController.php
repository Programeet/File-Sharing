<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Archivo;
use App\Genero;

class FileController extends Controller
{
    public function index(){
      $genero = Genero::all();
      return view('admin.upload')->with(['generos'=>$genero]);
    }
    public function store(Request $request){
      /**
      *@var UploadedFile
      **/

      if($request->hasFile('file')){
        $archivo = $request->file('file');
        return $archivo->store('upload', 'public');
      }else{
        return 'Archivo';
      }
    }

}
