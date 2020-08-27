<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderCalidad extends Model
{
    protected $table = 'slider_calidad';
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
        'calidad_id',
    ];

    public function calidad()
    {
        return $this->belongsTo(Calidad::class,'calidad_id');
    }
}