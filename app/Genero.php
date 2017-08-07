<?php

namespace App;

use App\Archivo;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $fillable = [
        'id','nombre'
    ];

    public $timestamps = false;

    public function archivos(){
        return $this->hasMany(Archivo::class);
    }
}
