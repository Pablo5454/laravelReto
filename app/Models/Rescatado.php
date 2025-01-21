<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rescatado extends Model
{
    use HasFactory;

    protected $fillable =[
        "nombre",
        "foto",
        "edad",
        "sexo",
        "procedencia",
        "valoracion_medica",
        "medico_id",
        "rescate_id"
    ];
}
