<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acessibilidade extends Model
{
  use HasFactory;
  protected $fillable = ['evelador', 'rampa', 'acessibilidade'];
}
