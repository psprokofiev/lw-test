<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelC extends Model
{
    use HasFactory;

    protected $connection = 'sqlite2';
}
