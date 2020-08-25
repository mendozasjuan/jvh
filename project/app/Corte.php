<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Corte extends Model
{
    protected $table = 'corte';
    public $timestamps = false;

    protected $fillable = [
        'nombre','descripcion','tamano_caja','medidas','envasado','piezas_por_caja','condiciones_termicas','especificaciones','categoria_corte_id'
    ];

    public function categoria()
    {
        return $this->belongsTo(CategoriaCorte::class,'categoria_corte_id');
    }

    public function etiquetados()
    {
        return $this->hasMany(EtiquetadoCorte::class,'corte_id');
    }

    public function imagenes()
    {
        return $this->hasMany(ImagenCorte::class,'corte_id');
    }

    public function packagings()
    {
        return $this->hasMany(PackagingCorte::class,'corte_id');
    }

    public function getNombreAttribute($nombre){
        return ucfirst($nombre);
    }
}
