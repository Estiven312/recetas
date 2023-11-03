<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guias', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('nombre',null);
            $table->longText('descripcion',null);
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categoria_guias');
            $table->longText('guia');
            $table->string('imagen');
           
            $table->date('fecha');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guias');
    }
};
