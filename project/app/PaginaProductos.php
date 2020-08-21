<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PaginaProductos extends Model
{
    protected $table = 'pagina_productos';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
		'seccion1_titulo',
    ];

    protected $fillable = [
    	'encabezado_imagen_fondo',
    	'seccion1_titulo',
    	'seccion1_imagen',
    	'seccion1_imagen_fondo',
    ];
}
