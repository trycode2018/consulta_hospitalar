<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;
    protected $table = 'tbl_consulta';
    public $timestamps = false;
    public function tipoConsulta(){
        return $this->belongsTo(TipoConsulta::class);
    }
    public function usuario(){
        return $this->belongsTo(User::class);
    }
    public function paciente(){
        return $this->belongsTo(Paciente::class);
    }
}
