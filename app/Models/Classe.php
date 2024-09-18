<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function turmas():HasMany{
        return $this->hasMany(Turma::class);
    }
    
// RELACIONAMENTO MUITO PARA MUITO
    public function disciplinas():BelongsToMany{
        return $this->belongsToMany(Disciplina::class)->withTimestamps();
    }
}
