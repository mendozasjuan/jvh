<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Produccion extends Model
{
    protected $table = 'produccion';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
        'texto_encabezado',
		'seccion1_titulo',
    	'seccion1_parrafo',
		'seccion2_titulo',
    	'seccion2_parrafo1',
    	'seccion2_parrafo2',
    	'seccion3_titulo',
    	'seccion3_parrafo',
    ];

    protected $fillable = [
    	'encabezado_imagen_fondo',
    	'logo_1_encabezado',
    	'logo_2_encabezado',
    	'texto_encabezado',
    	'texto_encabezado_habilitado',
    	'seccion1_titulo',
    	'seccion1_parrafo',
    	'seccion1_logo1',
    	'seccion1_logo2',
    	'seccion1_imagen_fondo',
    	'seccion2_titulo',
    	'seccion2_parrafo1',
    	'seccion2_parrafo2',
    	'seccion3_titulo',
    	'seccion3_parrafo',
    	'seccion3_imagen_fondo'
    ];
}
