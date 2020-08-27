<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderRecursosHumanos extends Model
{
    protected $table = 'slider_recursos_humanos';
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
        'pagina_recursos_humanos_id',
    ];

    public function recursosHumanos()
    {
        return $this->belongsTo(PaginaRecursosHumanos::class,'pagina_recursos_humanos_id');
    }
}