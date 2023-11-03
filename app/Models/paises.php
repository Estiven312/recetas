<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paises extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = [
        'pais',
    ];
    public function paises()
    {
        $paises = paises::all();
        return $paises;
    }

    public function guardar($pa)
    {

        $receta = paises::create([
            'pais' => $pa

        ]);

        return $receta->id;
    }






    public function buscar_id($id)
    {
        $categoria = paises::find($id);
        return $categoria;
    }

    public function actualizar($id, $nombre)
    {
        $receta = paises::find($id);
        // Actualizar los datos
        $receta->update([
            'pais' => $nombre,

        ]);
    }

    public function eliminar($id)
    {
        $this->where('id', $id)->delete();
    }
}
