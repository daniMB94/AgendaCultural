<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function inscripcions(): HasMany
    {
        return $this->hasMany(Inscripcion::class);
    }

    public function experiencia(): BelongsTo
    {
        return $this->belongsTo(Experiencia::class);
    }
}
