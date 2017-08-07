<?php

namespace App;

use App\Usuario;
use App\Genero;
use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';
    protected $fillable = [
        'id','nombre', 'artista', 'size', 'genero_id', 'usuario_id'
    ];

    public $timestamps = false;

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }

    public function genero(){
        return $this->belongsTo(Genero::class);
    }
}
