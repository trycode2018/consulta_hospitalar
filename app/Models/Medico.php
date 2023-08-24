<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'tbl_medico';
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class);
    }
    public function analise()
    {
        return $this->hasMany(Analise::class);
    }
}
