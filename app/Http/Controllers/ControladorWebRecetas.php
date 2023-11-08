<?php

namespace App\Http\Controllers;

use App\Models\recetas;
use App\Models\categorias;
use App\Models\paises;
use App\Models\anuncios;

use Illuminate\Http\Request;

class ControladorWebRecetas extends Controller
{
    public function index(Request $request)
    {
        $anun = new anuncios();
        $re = new recetas();
        $cate = new categorias();
        $pa = new paises();
        $nombre = $request->get('pagina');
        $pais = $request->get('pais');
        $pagina = 'Recetas';
        $anuncio = $anun->buscar_pagina($pagina);
        $id_pais = $pa->buscar($pais);
        $id = $cate->buscar_nombre($nombre);



        if ($pais != "") {

            if (count($id_pais) == 0) {
                $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                return view('recetas', compact('nombre', 'mess', 'anuncio'));
            } else {
                $numero = 0;
                $recetas = $re->buscar_pais($id_pais[0]['id'], $numero);

                if (count($recetas) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre', 'mess'));
                } else {
                    return view('recetas', compact('recetas', 'pais', 'anuncio'));
                }
            }
        } elseif ($nombre != "") {

            if (count($id) == 0) {
                $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                return view('recetas', compact('nombre', 'mess', 'anuncio'));
            } else {

                $numero = 0;
                $recetas = $re->buscar_categoria($id[0]['id'], $numero);
                if (count($recetas) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre', 'mess'));
                } else {
                    return view('recetas', compact('recetas', 'nombre', 'anuncio'));
                }
            }
        }
    }



    public function buscar(Request $request)
    {
        $re = new recetas();
        $cate = new categorias();
        $pa = new paises();
        $anun = new anuncios();
        $pagina = 'Recetas';
        $anuncio = $anun->buscar_pagina($pagina);
       
        if ($request->input('numero')) {
            $numero = $request->input('numero');
            $pais = $request->input('pais');
            $nombre = $request->input('nombre');

            $id_pais = $pa->buscar($pais);


            $id = $cate->buscar_nombre($nombre);


            $numero = $numero + 15;
            if ($numero === 16) {
                $numero = $numero-1;
            }


            if ($pais!="" and $nombre!="") {

               
                $recetas = $re->busqueda($id[0]['id'], $id_pais[0]['id'], $numero);

                if (count($recetas) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre','pais', 'mess','numero','anuncio'));
                } else {

                    return view('recetas', compact('recetas', 'nombre', 'pais','numero','anuncio')) ;
                }
            } elseif (($pais != "") and $nombre == "") {


                if (count($id_pais) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre','pais','mess','anuncio','anuncio'));
                } else {

                  
                    $recetas = $re->buscar_pais($id_pais[0]['id'], $numero);

                    if (count($recetas) == 0) {
                        $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                        return view('recetas', compact('nombre', 'mess','anuncio'));
                    } else {
                        return view('recetas', compact('recetas', 'pais','numero','anuncio'));
                    }
                }
            } elseif (($pais == "") and $nombre != "") {
                if (count($id) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre', 'mess'));
                } else {
                    $recetas = $re->buscar_categoria($id[0]['id'], $numero);
                    if (count($recetas) == 0) {
                        $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                        return view('recetas', compact('nombre', 'mess', 'anuncio'));
                    } else {
                        return view('recetas', compact('recetas', 'nombre', 'numero', 'anuncio'));
                    }
                }
            }
        } else {




            $pais = $request->input('pais');
            $nombre = $request->input('categoria');
    
            $id_pais = $pa->buscar($pais);
    
    
            $id = $cate->buscar_nombre($nombre);
    


            if ($pais!="" and $nombre!="") {
                $numero = 0;
                $recetas = $re->busqueda($id[0]['id'], $id_pais[0]['id'], $numero);

                if (count($recetas) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre','pais', 'mess'));
                } else {

                    return view('recetas', compact('recetas', 'nombre', 'pais', 'anuncio'));
                }
            } elseif (($pais != "") and $nombre == "") {


                if (count($id_pais) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre', 'mess', 'anuncio'));
                } else {

                    $numero = 0;
                    $recetas = $re->buscar_pais($id_pais[0]['id'], $numero);

                    if (count($recetas) == 0) {
                        $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                        return view('recetas', compact('nombre', 'mess'));
                    } else {
                        return view('recetas', compact('recetas', 'pais', 'anuncio'));
                    }
                }
            } elseif (($pais == "") and $nombre != "") {
                if (count($id) == 0) {
                    $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                    return view('recetas', compact('nombre', 'mess', 'anuncio'));
                } else {
                    $numero = 0;
                    $recetas = $re->buscar_categoria($id[0]['id'], $numero);
                    if (count($recetas) == 0) {
                        $mess = 'Aun no tenemos recetas pero muy pronto agregaremos!';
                        return view('recetas', compact('nombre', 'mess', 'anuncio'));
                    } else {
                        return view('recetas', compact('recetas', 'nombre', 'anuncio'));
                    }
                }
            }
        }
    }
}
