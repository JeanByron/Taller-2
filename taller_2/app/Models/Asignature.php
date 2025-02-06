<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asignature extends Model
{
    use HasFactory;


    public function calification()
    {
        return $this->hasMany(User::class);
    }
}



