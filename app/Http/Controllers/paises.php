<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paises as pais;

class paises extends Controller
{
    public function index()
    {
        $categ = new  pais();
        $paises = $categ->paises();
  

        return view('sistema.paises', compact('paises'));
    }

    public function nueva()
    {
        return view('sistema.nuevoPais');
    }

    public function guardar(Request $reques)
    {
        $nombre = htmlspecialchars(request()->input('pais'));
    

        $modelo = new pais();

        $modelo->guardar($nombre);

        return redirect('/sistema/paises');
    }

    public function update($id)
    {
        $modelo = new pais();


        $pa = $modelo->buscar_id($id);

        return view('sistema.nuevoPais', compact('pa'));
    }



    public function actualizar($id)
    {
        $modelo = new pais();
        $nombre = htmlspecialchars(request()->input('pais'));
        $categoria = $modelo->actualizar($id, $nombre);
        return redirect('/sistema/paises');
    }

    public function delete($id)
    {
        $modelo = new pais();
        $modelo->eliminar($id);
        return redirect('/sistema/paises');
    }
}
