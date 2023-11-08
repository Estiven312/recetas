<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\categorias;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
       
            $table->string('nombre');
         
        });

        
        $lista=['Helado','Faciles','Pasteles','Galletas','Smoothies','Frappe','Cocteles','Dulces','Saludables'];
        foreach($lista as $lis){
            $categoria = categorias::create([
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
        Schema::dropIfExists('categorias');
    }
};
