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
        'visitas',
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
            'visitas' => 1,
            'fecha' => $fecha
        ]);

        return $receta->id;
    }

    public function actualizar($id, $nombre, $descripcion, $pais, $tiempo, $rinde, $ingredientes, $instrucciones, $categoria, $imagen, $video, $visitas, $fecha)
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
            'visitas' => $visitas,
            'fecha' => $fecha
        ]);
    }
    public function actualizar_visitas($id, $visitas)
    {
        // Obtener un producto
        $receta = recetas::find($id);

        // Actualizar los datos
        $receta->update([

            'visitas' => $visitas

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
        $recetas = recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as categoria')
            ->orderBy('fecha', 'desc')
            ->skip($numero)
            ->limit(15)
            ->get();
        return $recetas;
    }

    public function consultas_palabra($palabra)
    {
        $recetas = recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as categoria')
            ->orderBy('fecha', 'desc')
            ->where('recetas.nombre', 'like', '%' . $palabra . '%')
            ->orWhere('ingredientes', 'like', '%' . $palabra . '%')
            ->orWhere('instrucciones', 'like', '%' . $palabra . '%')
            ->orWhere('tiempo', 'like', '%' . $palabra . '%')
            ->orWhere('visitas', 'like', '%' . $palabra . '%')
            ->orWhere('rinde', 'like', '%' . $palabra . '%')
            ->orWhere('categoria_id', 'like', '%' . $palabra . '%')
            ->orWhere('fecha', 'like', '%' . $palabra . '%')
            ->get();

        return $recetas;
    }

    public function buscar_id($id)
    {
        $receta = $this->where('id', $id)->get();
        return $receta;
    }

    public function buscar_pais($pais, $numero)
    {

        $recetas = recetas::join('paises', 'recetas.pais_id', '=', 'paises.id')
            ->select('recetas.*', 'paises.pais as nombre_c')
            ->where('pais_id', $pais)
            ->latest('created_at')
            ->skip($numero)
            ->limit(15)
            ->get();

        return $recetas;
    }

    public function buscar_categoria($id,$numero)
    {


        $recetas = recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as nombre_c')
            ->where('categoria_id', $id)
            ->orderBy('visitas', 'desc')
            ->skip($numero)
            ->limit(15)

            ->get();

        return $recetas;
    }
    public function busqueda($id, $id_pais,$numero)
    {

        $recetas = recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as nombre_c')
            ->where('categoria_id', $id)
            ->where('pais_id', $id_pais)
            ->orderBy('visitas', 'desc')
            ->skip($numero)
            ->limit(15)

            ->get();

        return $recetas;
    }

    public function destacada()
    {
        // Obtener la receta con mayor visitas de forma efectiva
        $receta = recetas::where('visitas', '>', 0)
            ->orderBy('visitas', 'desc')
            ->limit(1)
            ->first();

        return $receta;
    }

    public function mas_destacadas()
    {
        $recetas = recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as categoria')
            ->where('visitas', '>', 0)
            ->orderBy('visitas', 'desc')
            ->skip(1)
            ->take(6)
            ->get();

        return $recetas;
    }

    public function nuevas()
    {
        $recetas = recetas::join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as categoria')
            ->where('visitas', '>', 0)
            ->orderBy('fecha', 'desc')

            ->take(6)
            ->get();

        return $recetas;
    }
    public function similares($idCategoria, $idReceta)
    {
        $recetas = recetas::where('recetas.id', '<>', $idReceta)
            ->join('categorias', 'recetas.categoria_id', '=', 'categorias.id')
            ->select('recetas.*', 'categorias.nombre as categoria')
            ->orderBy('fecha', 'desc')
            ->limit(6)
            ->get();
        return $recetas;
    }
}
