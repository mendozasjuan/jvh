<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    protected $table = 'recursos_humanos';
    public $timestamps = false;



    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'telefono',
        'email',
        'pais',
        'nacionalidad',
        'dni',
        'fecha_nacimiento',
        'foto',
        'curriculum',
    ];

    public function pais()
    {
        return $this->belongsTo(Nacionalidad::class,'pais');
    }
}