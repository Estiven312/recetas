<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guia extends Model
{


    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre', // Add the `name` property
        'descripcion',
        'categoria_id',
        'guia',
        'imagen',
        'fecha'
    ];


    public function guardar($nombre, $descripcion, $categoria_id, $guia, $imagen, $fecha)
    {

        $guia = guia::create([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'categoria_id' => $categoria_id,
            'guia' => $guia,
            'imagen' => $imagen,
            'fecha' => $fecha
        ]);

        return $guia->id;
    }

    public function actualizar($id, $nombre, $descripcion, $categoria_id, $guia, $imagen, $fecha)
    {
        // Obtener un producto
        $receta = guia::find($id);

        // Actualizar los datos
        $receta->update([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'categoria_id' => $categoria_id,
            'guia' => $guia,
            'imagen' => $imagen,
            'fecha' => $fecha
        ]);
    }

    public function eliminar($id)
    {

        $img = $this->where('id', $id)->get('imagen');
        $this->where('id', $id)->delete();
        return $img;
    }


    public function consultas($numero)
    {

        $guias = guia::join('categoria_guias', 'guias.categoria_id', '=', 'categoria_guias.id')
            ->select('guias.*', 'categoria_guias.nombre as categoria')
            ->orderBy('fecha', 'desc')
            ->skip($numero)
            ->limit(25)
            ->get();
        return $guias;
    }

    public function consultas_palabra($palabra)
    {
        $guias = guia::join('categoria_guias', 'guias.categoria_id', '=', 'categoria_guias.id')
            ->select('guias.*', 'categoria_guias.nombre as categoria')
            ->orderBy('fecha', 'desc')
            ->where('guias.nombre', 'like', '%' . $palabra . '%')
            ->orWhere('descripcion', 'like', '%' . $palabra . '%')
            ->orWhere('fecha', 'like', '%' . $palabra . '%')

            ->get();
        return $guias;
    }
    public function buscar_categoria($id,$numero)
    {
        $receta = $this->where('categoria_id', $id)
        ->skip($numero)
        ->limit(15)
        ->get();
        return $receta;
    }

    public function buscar_id($id)
    {
        $receta = $this->where('id', $id)->get();
        return $receta;
    }
    public function similares($categoria_id, $id)
    {
        $guias = guia::where('guias.id', '<>', $categoria_id)
       
        ->orderBy('fecha', 'desc')
        ->limit(6)
        ->get();
 

        // Devolvemos las recetas restantes
        return $guias;
    }
}
