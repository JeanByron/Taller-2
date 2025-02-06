<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calification extends Model
{
    use HasFactory;
    public function asignature()
    {
        return $this->belongsTo(Asignature::class, 'asignature_id');
    }
public function user()
{
    return $this->belongsTo(Role::class, 'user_id');
}
}

