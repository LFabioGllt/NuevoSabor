<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  use HasFactory;

  protected $fillable = [
    'name_rec',
    'user_id',
    'menu_id',
    'ingredients',
    'instructions',
    'recomendation',
    'image'
  ];
}
