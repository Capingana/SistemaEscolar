<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turma extends Model
{
    use HasFactory;
    protected $table = "turmas";
    protected $fillable = ['nome', 'description', 'classe_id'];
    //Esta turma pertence a classe
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }
}
