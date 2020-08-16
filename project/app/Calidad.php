<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calidad extends Model
{
    protected $table = 'calidad';
    public $timestamps = false;

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
    	'seccion1_logo3',	
    	'seccion1_logo4',	
    	'seccion1_logo5',	
    	'seccion1_logo6',	
    	'seccion1_logo7',	
    	'seccion2_imagen_fondo',
    ];
}
