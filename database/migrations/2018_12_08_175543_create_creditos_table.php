<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreditosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creditos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fecha');
            $table->integer('capital');
            $table->integer('interes');
            $table->integer('total');
            $table->integer('cuotas');
            $table->integer('plazo');
            $table->integer('fre_pago');
            $table->integer('cap_actual')->nullable();
            $table->integer('int_actual')->nullable();
            $table->integer('tot_actual')->nullable();
            $table->integer('cuo_actual')->nullable();
            $table->integer('clientes_id')->unsigned();
            $table->foreign('clientes_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('creditos');
    }
}
