<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaCorte extends Model
{
    protected $table = 'categoria_corte';
    public $timestamps = false;

    protected $fillable = [
        'categoria',
    ];

    public function cortes()
    {
        return $this->hasMany('App\Corte','categoria_corte_id');
    }
}
