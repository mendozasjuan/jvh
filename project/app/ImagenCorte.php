<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenCorte extends Model
{
    //imagen_corte
    protected $table = 'imagen_corte';

    protected $fillable = [
        'imagen',
    ];

    public function corte()
    {
        return $this->belongsTo('App\Corte');
    }
}
