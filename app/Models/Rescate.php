<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rescate extends Model
{
    use HasFactory;

    protected $fillable =[
        "fecha_inicio",
        "fecha_fin",
        "viaje_id"
    ];
}
