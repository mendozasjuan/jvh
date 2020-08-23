<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Logo extends Model
{
    protected $table = 'logotipo';
    public $timestamps = false;

    
    protected $fillable = [
        'logo'
    ];
}