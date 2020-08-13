<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corte extends Model
{
    protected $table = 'corte';

    protected $fillable = [
        'nombre','descripcion','tamano_caja','medidas','envasado','piezas_por_caja','condiciones_termicas','especificaciones'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\CategoriaCorte');
    }

    public function etiquetados()
    {
        return $this->hasMany('App\EtiquetadoCorte','corte_id');
    }

    public function imagenes()
    {
        return $this->hasMany('App\ImagenCorte','corte_id');
    }

    public function packagings()
    {
        return $this->hasMany('App\PackagingCorte','corte_id');
    }
}
