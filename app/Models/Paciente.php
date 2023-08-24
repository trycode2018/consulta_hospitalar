<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'tbl_paciente';
    public $timestamps = false;
    public function analise()
    {
        return $this->hasMany(Analise::class);
    }
    public function consulta()
    {
        return $this->hasMany(Consulta::class);
    }
}
