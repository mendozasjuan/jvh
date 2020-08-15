<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuienesSomos extends Model
{
    protected $table = 'quienessomos';
    public $timestamps = false;

    protected $fillable = [
    	'encabezado_imagen_fondo',
    	'logo_1_encabezado',
    	'logo_2_encabezado',
    	'texto_encabezado',
    	'texto_encabezado_habilitado',
    	'seccio1_parrafo1',
    	'seccio1_parrafo2',
    	'seccio1_parrafo3',
    	'seccio1_parrafo4',
    	'seccion1_imagen_fondo',
    	'seccion2_titulo',
    	'seccion2_parrafo',
    	'seccion2_imagen_fondo',
    	'seccion3_parrafo1',
    	'seccion3_parrafo2',
    	'seccion4_parrafo1',
    	'seccion4_parrafo2',
    	'seccion4_parrafo3',
    	'seccion4_parrafo4',
    	'seccion4_imagen_fondo',
    ];
}
