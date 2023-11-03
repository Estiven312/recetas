<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',
       
        
    ];
    public function categorias(){
        $categoria= categorias::all();
        return $categoria;

    }

    public function guardar($nombre){

        $categoria = categorias::create([
            'nombre' => $nombre,
            
        ]);
    }

    public function buscar_id($id){
        $categoria = categorias::find($id);
        return $categoria;


    }

    public function actualizar($id,$nombre){
        $receta = categorias::find($id);
        
         // Actualizar los datos
         $receta->update([
             'nombre' => $nombre,
          
         ]);
    }

    public function eliminar($id){
        $this->where('id', $id)->delete();
       
    }
}
