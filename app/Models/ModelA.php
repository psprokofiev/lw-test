<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelA extends Model
{
    use HasFactory;

//    protected $connection = 'sqlite1';

    public function b()
    {
        return $this->hasMany(ModelB::class, 'a_id', 'id');
    }
    public function d()
    {
        return $this->hasMany(ModelA::class, 'id', 'id');
    }
}
