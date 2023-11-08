<?php

namespace App\Http\Controllers;
use App\Models\recetas;
use App\Models\img_adicionals;
use App\Models\anuncios;
use Illuminate\Http\Request;
use Termwind\Components\Li;

class ControladorWebVistaRecetas extends Controller
{
    public function index($id){
        $adi= new img_adicionals();
        $re= new recetas();
        $anu=new anuncios();
        $pagina="VistaRecetas";
        $anuncio=$anu->buscar_pagina($pagina);
        $receta=$re->buscar_id($id);
        $adicionales=$adi->buscar($id);

        $categoria_id=$receta[0]['categoria_id'];

        $visitas=$receta[0]['visitas']+1;
   
        $re->actualizar_visitas($id,$visitas);

        $similares= $re->similares($categoria_id,$id);


        $ingredientes= htmlspecialchars_decode($receta[0]['ingredientes']);
        $instrucciones=htmlspecialchars_decode($receta[0]['instrucciones']);
       

        return view('vistaReceta',compact('receta','adicionales', 'ingredientes','instrucciones','similares','anuncio'));
    }
}
