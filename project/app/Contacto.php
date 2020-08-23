<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    public $timestamps = false;



    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'telefono',
        'mensaje',     
    ];
}