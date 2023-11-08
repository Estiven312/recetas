<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anuncios extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'anuncio',
        'pagina',


    ];
    public function anuncios()
    {
        $categoria = anuncios::all();
        return $categoria;
    }

    public function guardar($nombre,$pagina)
    {

        $categoria = anuncios::create([
            'anuncio' => $nombre,
            'pagina' => $pagina,


        ]);
    }

    public function buscar_id($id)
    {
        $anuncio = anuncios::find($id);
        return $anuncio;
    }

    public function actualizar($id, $nombre,$pagina)
    {
        $anuncio = anuncios::find($id);

        // Actualizar los datos
        $anuncio->update([
            'anuncio' => $nombre,
            'pagina' => $pagina,


        ]);
    }

    public function eliminar($id)
    {
        $this->where('id', $id)->delete();
    }

  public function buscar_pagina($pagina) {

    $anuncio = anuncios::where('pagina', '=', $pagina)
                  ->get();
    return $anuncio;
}
}
