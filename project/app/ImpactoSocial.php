<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ImpactoSocial extends Model
{
    protected $table = 'impactosocial';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
		'texto_encabezado',
		'seccion1_titulo',	
    	'seccion1_parrafo1',	
    	'seccion1_parrafo2',	
    	'seccion2_titulo',
    ];

    protected $fillable = [
    	'encabezado_imagen_fondo',	
    	'logo_1_encabezado',	
    	'logo_2_encabezado',	
    	'texto_encabezado',	
    	'texto_encabezado_habilitado',	
    	'seccion1_titulo',	
    	'seccion1_parrafo1',	
    	'seccion1_parrafo2',	
    	'seccion2_titulo',	
    	'seccion2_imagen_fondo',
    ];
}
