<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EtiquetadoCorte extends Model
{
    //etiquetado_corte
    protected $table = 'etiquetado_corte';
    public $timestamps = false;

    protected $fillable = [
        'etiquetado','corte_id'
    ];

    public function corte()
    {
        return $this->belongsTo(Corte::class,'corte_id');
    }

    public function getEtiquetadoAttribute(){
    	return \Storage::url($this->etiquetado);
    }
}
