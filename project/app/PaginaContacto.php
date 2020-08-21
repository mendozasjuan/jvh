<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PaginaContacto extends Model
{
    protected $table = 'pagina_contacto';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
		'ciudad1',
        'direccion1',
        'ciudad2',
        'direccion2',
        'contacto_titulo',
        'contacto_descripcion',
    ];

    protected $fillable = [
    	'encabezado_imagen_fondo',
        'ciudad1',
        'direccion1',
        'telefonos1',
        'ciudad2',
        'direccion2',
        'telefonos2',
        'contacto_titulo',
        'contacto_descripcion',
        'comercio_exterior',
        'area_comercial',
        'coordenadas1',
        'coordenadas2',
    ];
}