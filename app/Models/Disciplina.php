<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable=[
        "name","codigo","carga_horaria_semanal","carga_horaria_mensal"
    ];
}
