<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class CategoriaCorte extends Model
{
    protected $table = 'categoria_corte';
    public $timestamps = false;

    use HasTranslations;

    protected $translatable = ['categoria'];

    protected $fillable = [
        'categoria',
    ];

    public function cortes()
    {
        return $this->hasMany(Corte::class,'categoria_corte_id');
    }
}
