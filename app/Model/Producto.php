<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "productos";

    protected $fillable = [
      'nombre', 'precio', 'categoria_id'
    ];
}
