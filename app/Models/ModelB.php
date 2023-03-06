<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ModelB extends Model
{
    use HasFactory;

    protected $connection = 'sqlite2';

    public function a(): BelongsTo
    {
        return $this->belongsTo(ModelA::class, 'a_id', 'id');
    }

    public function a1(): BelongsTo
    {
        return $this->belongsTo(ModelA::class, 'a_id', 'id');
    }

    public function c(): HasMany
    {
        return $this->hasMany(ModelC::class, 'a_id', 'id');
    }
}
