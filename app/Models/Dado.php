<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dado extends Model
{
    use HasFactory;
    protected $fillable = [
        "telefone",
        "user_id",
        "bi",
        "sexo",
        "data_nascimento"
    ];

    public function usuario():BelongsTo{
        return $this->belongsTo(User::class);
    }
}
