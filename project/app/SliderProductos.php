<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderProductos extends Model
{
    protected $table = 'slider_productos';
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
        'pagina_productos_id',
    ];

    public function producto()
    {
        return $this->belongsTo(PaginaProductos::class,'pagina_productos_id');
    }
}