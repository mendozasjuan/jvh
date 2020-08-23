<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ContactoFooter extends Model
{
    protected $table = 'contacto_footer';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
		'ciudad1',
        'direccion1',
        'ciudad2',
        'direccion2',
        'contacto_titulo',
    ];

    protected $fillable = [
        'ciudad1',
        'direccion1',
        'telefonos1',
        'ciudad2',
        'direccion2',
        'telefonos2',
        'contacto_titulo',
        'comercio_exterior',
        'area_comercial',
    ];
}