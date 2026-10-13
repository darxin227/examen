<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Pedido extends Model
{
    protected $table = 'pedidos';
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'direccion'];
}
