<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recetas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre', // Add the `name` property
        'descripcion',
        'pais_id',
        'tiempo',
        'rinde',
        'ingredientes',
        'instrucciones',
        'categoria_id',
        'imagen',
        'video',
        'fecha'
    ];

    public function guardar($nombre, $descripcion, $pais, $tiempo, $rinde, $ingredientes, $instrucciones, $categoria, $imagen, $video, $fecha)
    {

        $receta = recetas::create([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'pais_id' => $pais,
            'tiempo' => $tiempo,
            'rinde' => $rinde,
            'ingredientes' => $ingredientes,
            'instrucciones' => $instrucciones,
            'categoria_id' => $categoria,
            'imagen' => $imagen,
            'video' => $video,
            'fecha' => $fecha
        ]);

        return $receta->id;
    }

    public function actualizar($id,$nombre, $descripcion, $pais, $tiempo, $rinde, $ingredientes, $instrucciones, $categoria, $imagen, $video, $fecha)
    {
        // Obtener un producto
        $receta = recetas::find($id);

        // Actualizar los datos
        $receta->update([
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'pais_id' => $pais,
            'tiempo' => $tiempo,
            'rinde' => $rinde,
            'ingredientes' => $ingredientes,
            'instrucciones' => $instrucciones,
            'categoria_id' => $categoria,
            'imagen' => $imagen,
            'video' => $video,
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

        $recetas = Recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as categoria')
            ->orderBy('fecha', 'desc')
            ->skip($numero)
            ->limit(20)
            ->get();
        return $recetas;
    }
    public function buscar_id($id)
    {

        $receta = $this->where('id', $id)->get();
        return $receta;
    }


}
