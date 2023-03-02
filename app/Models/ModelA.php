<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelA extends Model
{
    use HasFactory;

    public function b()
    {
        return $this->hasMany(ModelB::class, 'a_id', 'id');
    }
}
