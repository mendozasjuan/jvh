<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PackagingCorte extends Model
{
    protected $table = 'packaging_corte';
    public $timestamps = false;

    protected $fillable = [
        'packaging','corte_id'
    ];


    public function corte()
    {
        return $this->belongsTo(Corte::class,'corte_id');
    }

    public function getPackagingAttribute(){
    	return \Storage::url($this->packaging);
    }
}
