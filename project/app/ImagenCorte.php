<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagenCorte extends Model
{
    //imagen_corte
    protected $table = 'imagen_corte';
    public $timestamps = false;

    protected $fillable = [
        'imagen','corte_id'
    ];

    public function corte()
    {
        return $this->belongsTo(Corte::class,'corte_id');
    }

    public function getImagenAttribute(){
    	return \Storage::url($this->imagen);
    }
}
