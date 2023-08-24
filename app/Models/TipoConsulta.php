<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoConsulta extends Model
{
    use HasFactory;
    protected $table = 'tbl_tipo_consulta';
    public $timestamps = false;
    public function consulta(){
        return $this->hasMany(Consulta::class);
    }
}
