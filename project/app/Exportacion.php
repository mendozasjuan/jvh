<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Exportacion extends Model
{
    protected $table = 'exportacion';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
		'texto_encabezado',
		'seccion1_titulo',	
		'seccion1_parrafo',
		'seccion2_parrafo1',	
		'seccion2_parrafo2',
		'seccion3_titulo',
    ];

    protected $fillable = [
    	'encabezado_imagen_fondo',
    	'logo_1_encabezado',
    	'logo_2_encabezado',
    	'texto_encabezado',	
    	'texto_encabezado_habilitado',	
    	'seccion1_titulo',	
    	'seccion1_parrafo',	
    	'seccion1_imagen',	
    	'seccion2_parrafo1',	
    	'seccion2_parrafo2',	
    	'seccion2_imagen_fondo',	
    	'seccion3_titulo',	
    	'seccion3_imagen_fondo',
    ];
}
