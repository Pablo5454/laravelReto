<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tripulante extends Model
{
    use HasFactory;
    //protected $table ="Tripulantes";
    
    protected $fillable =[
        "nombre", 
        "apellido", 
        "rol",
        "fecha_incorporacion",
        "viaje_id"
    ];

   //protected $guarded =["id"];
    
    //public function viajes(){


        //return $this->belongsTo(Viaje::class, 'viaje_id'); }
}
