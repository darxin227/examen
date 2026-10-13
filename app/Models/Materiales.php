<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materiales extends Model
{
    protected $table = 'materiales';
    protected $fillable = ['nombre', 'descripcion'];

     public function proveedor(): BelongsTo
    {
        return $this->BelongsTo(Alquiler::class, 'id_proveedor');
    }
}
