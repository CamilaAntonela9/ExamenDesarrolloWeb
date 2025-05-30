<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    protected $fillable = [
        'codigo_tienda',
        'almacenamiento',
        'ram',
        'tarjeta_grafica',
        'precio',
        'descripcion',
        'imagen',
        'procesador',
    ];
}
