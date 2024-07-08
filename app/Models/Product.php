<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Agrega las propiedades que deseas proteger
    protected $fillable = ['name', 'description', 'price'];
}
