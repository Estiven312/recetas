<?php

namespace App\Http\Controllers;

use App\Models\categorias as cate;
use Illuminate\Http\Request;
use Illuminate\Redis\RedisServiceProvider;
use App\Models\Usuario;

class categorias extends Controller
{
    public function index(Request $request)
    {

        if ($request->session()->get('name')) {



            $categ = new cate();
            $categorias = $categ->categorias();


            return view('sistema.categoria', compact('categorias'));
        } else {
            return redirect('/sistema/login');
        }
    }

    public function nueva()
    {
        $request = request();
        if ($request->session()->get('name')) {
            return view('sistema.nuevaCategoria');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function guardar(Request $reques)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $nombre = htmlspecialchars(request()->input('nombre'));
            echo $nombre;


            $modelo = new cate();

            $modelo->guardar($nombre);

            return redirect('sistema/categorias');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function update($id)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $modelo = new cate();


            $categoria = $modelo->buscar_id($id);

            return view('sistema.nuevaCategoria', compact('categoria'));
        } else {
            return redirect('/sistema/login');
        }
    }



    public function actualizar($id)
    {
        $request = request();
        if ($request->session()->get('name')) {

            $modelo = new cate();

            $nombre = htmlspecialchars(request()->input('nombre'));



            $categoria = $modelo->actualizar($id, $nombre);
            return redirect('/sistema/categorias');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function delete($id)
    {


        $request = request();
        if ($request->session()->get('name')) {



            try {
                $modelo = new cate();
                $modelo->eliminar($id);
                return redirect('/sistema/categorias');
            } catch (\Illuminate\Database\QueryException $e) {
                $categ = new cate();
            $categorias = $categ->categorias();

                    $alerta = 'La categoria tiene recetas asociadas. No se puede eliminar.';
                    return view('sistema.categoria', compact('alerta','categorias'));
                
            }
        } else {
            return redirect('/sistema/login');
        }
    }
}
