<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
 //creacion de la propiedad fillable en el modelo
    protected $fillable = ['category_name','active'];
}
