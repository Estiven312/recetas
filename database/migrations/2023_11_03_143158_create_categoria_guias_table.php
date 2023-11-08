<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\categoria_guia;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_guias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            
        });
        $lista=['Cuchillos','Sartenes','Loza','Electrodomesticos'];
        foreach($lista as $lis){
            $categoria = categoria_guia::create([
                'nombre' => $lis,
               
                
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_guias');
    }
};
