<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analise extends Model
{
    use HasFactory;
    protected $table = 'tbl_analise';
    public $timestamps = false;
    public function tipoAnalise(){
        return $this->belongsTo(TipoAnalise::class);
    }
    public function medico(){
        return $this->belongsTo(Medico::class);
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
