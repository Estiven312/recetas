<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guia;
use App\Models\categoria_guia;
use App\Models\anuncios;

class ControladorWebCompras extends Controller
{
    public function index(Request $request)
    {
        $gu = new categoria_guia();
        $gui= new guia();
        $anu= new anuncios();
        $numero=0;
        $nombre = $request->get('categoria');
        $guia = $gu->buscar_nombre($nombre);
        $guias= $gui->buscar_categoria($guia['id'],$numero);
        $pagina= 'Guias';
        $anuncio= $anu->buscar_pagina($pagina); 
        return view('compras', compact('guias', 'nombre', 'anuncio'));
    }

    public function otras(Request $request){
        $gu = new categoria_guia();
        $gui= new guia();
        $anu= new anuncios();
        $nombre = $request->get('categoria');
        $numero = $request->input('numero');
        $numero=$numero+15;
        if($numero==16){
            $numero=$numero-1;
        }
        $guia = $gu->buscar_nombre($nombre);




        $guias= $gui->buscar_categoria($guia['id'],$numero);
        $pagina= 'Guias';
        $anuncio= $anu->buscar_pagina($pagina); 




        return view('compras', compact('guias', 'nombre', 'anuncio','numero'));
    }
}
