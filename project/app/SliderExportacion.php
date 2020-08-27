<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderExportacion extends Model
{
    protected $table = 'slider_exportacion';
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
        'exportacion_id',
    ];

    public function exportacion()
    {
        return $this->belongsTo(Exportacion::class,'exportacion_id');
    }
}