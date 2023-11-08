<?php

namespace App\Http\Controllers;
use App\Models\guia;
use App\Models\anuncios;
use App\Models\categoria_guia;

use Illuminate\Http\Request;

class ControladorWebVistaGuia extends Controller
{
    public function index($id){
        $gui= new guia();
        $anun= new anuncios();

        $ca= new categoria_guia();


        $pagina='vistaGuia';
        $anuncio= $anun->buscar_pagina($pagina);

        $guia= $gui->buscar_id($id);
        $id_o=$guia[0]['categoria_id'];


        $similares=$gui->similares($id_o,$id);
        


        $categoria=$ca->buscar_id($id_o);
        $categor=$categoria['nombre'];
        
        return view('vistaGuia',compact('guia','anuncio','similares','categor'));
    }
}
