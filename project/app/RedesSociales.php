<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class RedesSociales extends Model
{
    protected $table = 'redes_sociales';
    public $timestamps = false;

    
    protected $fillable = [
        'linkedin',
        'instagram',
        'facebook',
        'youtube',
    ];
}