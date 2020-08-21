<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PaginaRecursosHumanos extends Model
{
    protected $table = 'pagina_recursos_humanos';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
		'seccion1_titulo',
        'seccion1_parrafo',
    ];

    protected $fillable = [
    	'encabezado_imagen_fondo',
    	'seccion1_titulo',
    	'seccion1_parrafo',
    ];
}
