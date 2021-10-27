<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $table = 'aulas';

    protected $fillable = ['tituloAula', 'curso', 'profAula', 'dtAulaProf', 'qtdHrsAula'];

    public function professor(){

        return $this->belongsTo('App\Models\Professor','profAula');
    }
}
