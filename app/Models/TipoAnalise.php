<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAnalise extends Model
{
    use HasFactory;
    protected $table = 'tbl_tipo_analise';
    public $timestamps = false;
    public function analise(){
        return $this->hasMany(Analise::class);
    }
}
