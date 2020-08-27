<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SliderImpactoSocial extends Model
{
    protected $table = 'slider_impacto_social';
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
        'impacto_social_id',
    ];

    public function impactoSocial()
    {
        return $this->belongsTo(ImpactoSocial::class,'impacto_social_id');
    }
}