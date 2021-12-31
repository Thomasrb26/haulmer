<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrador extends Model
{
    use HasFactory;
    //use softDeletes;
    protected $fillable = [
        'mascota',
        'user_id',
    ];
}
