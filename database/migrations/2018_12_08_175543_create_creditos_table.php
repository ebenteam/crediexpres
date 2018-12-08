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
            $table->integer('capital');
            $table->integer('interes');
            $table->integer('total');
            $table->integer('cuotas');
            $table->integer('plazo');
            $table->integer('fre_pago');
            $table->integer('cap_actual');
            $table->integer('int_actual');
            $table->integer('tot_actual');
            $table->integer('cuo_actual');
            $table->integer('abonos_id')->unsigned();
            $table->foreign('abonos_id')->references('id')->on('abonos')->onDelete('cascade')->onUpdate('cascade');
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
