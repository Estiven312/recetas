<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria_guia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'nombre',


    ];
    public function categorias()
    {
        $categoria = categoria_guia::all();
        return $categoria;
    }

    public function guardar($nombre)
    {

        $categoria = categoria_guia::create([
            'nombre' => $nombre,

        ]);
    }

    public function buscar_id($id)
    {
        $categoria = categoria_guia::find($id);
        return $categoria;
    }
    public function buscar_nombre($nombre)
    {
        $categoria = categoria_guia::where('nombre', '=', $nombre)
            ->first();

        return $categoria;
    }

    public function actualizar($id, $nombre)
    {
        $receta = categoria_guia::find($id);

        // Actualizar los datos
        $receta->update([
            'nombre' => $nombre,

        ]);
    }

    public function eliminar($id)
    {
        $this->where('id', $id)->delete();
    }
}
