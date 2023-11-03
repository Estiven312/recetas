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
        Schema::create('img_adicionals', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('receta_id')->unsigned()->size(20);
            $table->foreign('receta_id')
                ->references('id')
                ->on('recetas');
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
        Schema::dropIfExists('img_adicionals');
    }
};
