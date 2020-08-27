<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderInicio extends Model
{
    protected $table = 'slider_inicio';
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
        'pagina_inicio_id',
    ];

    public function inicio()
    {
        return $this->belongsTo(Inicio::class,'pagina_inicio_id');
    }
}