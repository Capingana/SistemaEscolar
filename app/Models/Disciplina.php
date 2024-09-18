<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Disciplina extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "codigo",
        "carga_horaria_semanal",
        "carga_horaria_mensal"
    ];
    // RELACIONAMENTO MUITO A MUITO COM A TABELA CLASSE
    public function classes(): BelongsToMany
    {
        return $this->belongsToMany(Classe::class)->withTimestamps();
    }
}
