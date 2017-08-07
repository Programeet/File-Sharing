<?php

namespace App;

use App\Archivo;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    protected $fillable = [
        'id','nick', 'email', 'password', 'tipo'
    ];

    protected $hidden = [
        'password'
    ];

    public $timestamps = false;

    public function archivos(){
        return $this->hasMany(Archivo::class);
    }
}
