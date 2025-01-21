<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Viaje extends Model
{
   use HasFactory;
 
   protected $fillable =[
      "origen", 
      "destino"
  ];
}
