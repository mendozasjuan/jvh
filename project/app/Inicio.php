<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inicio extends Model
{
   	protected $table = 'inicio';
    public $timestamps = false;

    protected $fillable = [
    	'encabezado_imagen_fondo',
    	'logo_1_encabezado',
    	'logo_2_encabezado',
    	'texto_encabezado',
    	'texto_encabezado_habilitado',
    	'seccion1_titulo',
    	'seccion_1_parrafo',
    	'seccion1_logo1',
    	'seccion1_logo2',
    	'seccion1_logo3',
    	'seccion2_imagen_fondo',
    	'seccio2_titulo',
    	'seccion_2_parrafo',
    	'seccion3_titulo',
    	'seccion3_parrafo',
    	'seccion3_imagen',
    	'seccion4_titulo',
    	'seccion4_imagen_fondo',
    ];
}
