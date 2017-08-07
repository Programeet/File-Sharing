<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos';
    protected $fillable = [
        'id','nombre', 'artista', 'size', 'genero_id', 'usuario_id'
    ];

    public $timestamps = false;
}
