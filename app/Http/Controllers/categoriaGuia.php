<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria_guia;

class categoriaGuia extends Controller
{
    public function index()
    {
        $request = request();
        if ($request->session()->get('name')) {
            $categoria = new categoria_guia();
            $cate = $categoria->categorias();
            return view('sistema.categoriaGuia', compact('cate'));
        } else {
            return redirect('/sistema/login');
        }
    }


    public function nuevo()
    {
        $request = request();
        if ($request->session()->get('name')) {
            return view('sistema.categoriaGuiaNueva');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function guardar(Request $request)
    {

        if ($request->session()->get('name')) {
            $nombre = htmlspecialchars(request()->input('nombre'));
            


            $modelo = new categoria_guia();

            $modelo->guardar($nombre);

            return redirect('sistema/categoria/guia');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function update($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new categoria_guia();


            $categoria = $modelo->buscar_id($id);

            return view('sistema.categoriaGuiaNueva', compact('categoria'));
        } else {
            return redirect('/sistema/login');
        }
    }



    public function actualizar($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new categoria_guia();

            $nombre = htmlspecialchars(request()->input('nombre'));



            $categoria = $modelo->actualizar($id, $nombre);
            return redirect('/sistema/categoria/guia');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function delete($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            try {
            $modelo = new categoria_guia();
            $modelo->eliminar($id);
            return redirect('/sistema/categoria/guia');
        } catch (\Illuminate\Database\QueryException $e) {

            $categoria = new categoria_guia();
            $cate = $categoria->categorias();
            $alerta = 'La categoria tiene guias asociadas. No se puede eliminar.';
            return view('sistema.categoriaGuia', compact('cate', 'alerta'));
        }


        } else {
            return redirect('/sistema/login');
        }
    }
}
