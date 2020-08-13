<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagingCorte extends Model
{
    protected $table = 'packaging_corte';

    protected $fillable = [
        'packaging',
    ];


    public function corte()
    {
        return $this->belongsTo('App\Corte');
    }
}
