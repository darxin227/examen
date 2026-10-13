<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
class DetalleProducto extends Model
{
    protected $table = 'detalle_productos';
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'direccion'];

     public function producto(): BelongsTo
    {
        return $this->BelongsTo(Alquiler::class, 'id_producto');
    }
     public function categoria(): BelongsTo
    {
        return $this->BelongsTo(Alquiler::class, 'id_categoria');
    }
     public function material(): BelongsTo
    {
        return $this->BelongsTo(Alquiler::class, 'id_material');
    }
     public function proveedor(): BelongsTo
    {
        return $this->BelongsTo(Alquiler::class, 'id_proveedor');
    }
     public function pedido(): BelongsTo
    {
        return $this->BelongsTo(Alquiler::class, 'id_pedido');
    }
}
