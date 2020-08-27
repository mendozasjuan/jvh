<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderContacto extends Model
{
    protected $table = 'slider_contacto';
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
        'pagina_contacto_id',
    ];

    public function contacto()
    {
        return $this->belongsTo(PaginaContacto::class,'pagina_contacto_id');
    }
}