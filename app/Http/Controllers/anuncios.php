<?php

namespace App\Http\Controllers;
use App\Models\anuncios as anuncio;
use Illuminate\Http\Request;

class anuncios extends Controller
{
    
    public function index(Request $request)
    {
        
        if ($request->session()->get('name')) {



            $categ = new anuncio();
            $anuncios = $categ->anuncios();


            return view('sistema.anuncios', compact('anuncios'));
        } else {
            return redirect('/sistema/login');
        }
    }

    public function nuevo()
    {
        $request = request();
        if ($request->session()->get('name')) {
            return view('sistema.nuevoAnuncio');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function guardar(Request $reques)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $nombre = htmlspecialchars(request()->input('anuncio'));
            $pagina = htmlspecialchars(request()->input('lst_pagina'));
         


            $modelo = new anuncio();

            $modelo->guardar($nombre,$pagina);

            return redirect('sistema/anuncios');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function update($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new anuncio();


            $anuncio = $modelo->buscar_id($id);

            return view('sistema.nuevoAnuncio', compact('anuncio'));
        } else {
            return redirect('/sistema/login');
        }
    }



    public function actualizar($id)
    {
        $request = request();
        if ($request->session()->get('name')) {

            $modelo = new anuncio();

            $nombre = htmlspecialchars(request()->input('anuncio'));
            $pagina = htmlspecialchars(request()->input('lst_pagina'));



            $categoria = $modelo->actualizar($id, $nombre,$pagina);
            return redirect('/sistema/anuncios');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function delete($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new anuncio();
            $modelo->eliminar($id);
            return redirect('/sistema/anuncios');
        } else {
            return redirect('/sistema/login');
        }
    }

}
