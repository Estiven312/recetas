<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paises as pais;

class paises extends Controller
{
    public function index()
    {
        $request = request();
        if ($request->session()->get('name')) {
            $categ = new  pais();
            $paises = $categ->paises();


            return view('sistema.paises', compact('paises'));
        } else {
            return redirect('/sistema/login');
        }
    }

    public function nueva()
    {
        $request = request();
        if ($request->session()->get('name')) {
            return view('sistema.nuevoPais');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function guardar(Request $reques)
    {
        $request = request();
        if ($request->session()->get('name')) {

            $nombre = htmlspecialchars(request()->input('pais'));


            $modelo = new pais();

            $modelo->guardar($nombre);

            return redirect('/sistema/paises');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function update($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new pais();


            $pa = $modelo->buscar_id($id);

            return view('sistema.nuevoPais', compact('pa'));
        } else {
            return redirect('/sistema/login');
        }
    }



    public function actualizar($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new pais();
            $nombre = htmlspecialchars(request()->input('pais'));
            $categoria = $modelo->actualizar($id, $nombre);
            return redirect('/sistema/paises');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function delete($id)
    {
        $request = request();
        if ($request->session()->get('name')) {

            try {

                $modelo = new pais();
                $modelo->eliminar($id);
                return redirect('/sistema/paises');
            } catch (\Illuminate\Database\QueryException $e) {
                $categ = new  pais();
                $paises = $categ->paises();
                $alerta = 'El pais tiene recetas asociadas. No se puede eliminar.';
                return view('sistema.paises', compact('paises', 'alerta'));
            }
        } else {
            return redirect('/sistema/login');
        }
    }
}
