<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtiquetadoCorte extends Model
{
    //etiquetado_corte
    protected $table = 'etiquetado_corte';

    protected $fillable = [
        'etiquetado',
    ];

    public function corte()
    {
        return $this->belongsTo('App\Corte');
    }
}
