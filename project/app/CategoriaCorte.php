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
        return $this->hasMany(Corte::class,'categoria_corte_id');
    }
}
