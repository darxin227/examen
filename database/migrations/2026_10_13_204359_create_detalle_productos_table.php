<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detalle_productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->foreignId('id_producto')->constrained('productos')->onDelete('cascade');
            $table->foreignId('id_categoria')->constrained('categorias')->onDelete('cascade');
            $table->foreignId('id_material')->constrained('materiales')->onDelete('cascade');
            $table->foreignId('id_proveedor')->constrained('proveedores')->onDelete('cascade');
            $table->foreignId('id_pedido')->constrained('pedidos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_productos');
    }
};
