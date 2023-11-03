<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class img_adicionals extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'receta_id',

    ];
    public function buscar($id)
    {
        $adicionales = img_adicionals::where('receta_id', '=', $id)->get();
        return $adicionales;
    }
   

    public function guardar($id, $nombre)
    {

        $user = img_adicionals::create([
            'nombre' => $nombre,
            'receta_id' => $id
        ]);
    }

    public  function eliminar($id)
    {
        $con = $this->where('receta_id', $id)->get('nombre');
        $this->where('receta_id', $id)->delete();
        return $con;
    }
}
