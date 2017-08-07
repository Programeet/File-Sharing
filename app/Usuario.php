<?php

namespace App;

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
}
