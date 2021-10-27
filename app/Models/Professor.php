<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professors';

    protected $fillable = ['nomeProf', 'emailProf', 'telefoneProf', 'nRegistro', 'titulacao', 'salario', 'qtdAulasMes', 'valorHrAulaProf'];

    public function aulas()
    {
        return $this->hasMany(Aula::class, 'profAula', 'id');
    }
}
