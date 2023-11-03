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
        Schema::create('recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('nombre',null);
            $table->longText('descripcion',null);
            $table->integer('pais_id')->unsigned()->size(20);
            $table->foreign('pais_id')
                ->references('id')
                ->on('paises');
            $table->String('tiempo');
            $table->String('rinde');
            $table->longText('ingredientes');
            $table->longText('instrucciones');
            $table->integer('categoria_id')->unsigned()->size(20);
            $table->foreign('categoria_id')
                ->references('id')
                ->on('categorias');
            $table->String('imagen');
            $table->String('video');
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
        Schema::dropIfExists('recetas');
    }
};
