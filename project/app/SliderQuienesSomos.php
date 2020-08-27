<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderQuienesSomos extends Model
{
    protected $table = 'slider_quienes_somos';
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
        'quienes_somos_id',
    ];

    public function quienesSomos()
    {
        return $this->belongsTo(QuienesSomos::class,'quienes_somos_id');
    }
}