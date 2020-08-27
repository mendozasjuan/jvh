<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderProduccion extends Model
{
    protected $table = 'slider_produccion';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = [
        'titulo',
        'texto',
    ];

    protected $fillable = [
       'imagen',
        'titulo',
        'texto',
        'orden',
        'produccion_id',
    ];

    public function produccion()
    {
        return $this->belongsTo(Produccion::class,'produccion_id');
    }
}