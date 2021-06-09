<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGastosExtrasOrdenCompraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gastos_extras_orden_compra', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('gasto_extra_id');
            $table->foreign('gasto_extra_id')->references('id')->on('gastos_extras');

            $table->unsignedBigInteger('orden_compra_id');
            $table->foreign('orden_compra_id')->references('id')->on('ordenes_compras');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gastos_extras_orden_compra');
    }
}
