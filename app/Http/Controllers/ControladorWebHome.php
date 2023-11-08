<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\recetas;


class ControladorWebHome extends Controller
{
    protected function cortar_descripcion($descripcion, $limite)
    {
        $lista = [];
        foreach ($descripcion as $item) {

            $descripcion = trim($item['descripcion']);
            $longitud = strlen($descripcion);
            if ($longitud > $limite) {
                $descripcion = substr($descripcion, 0, $limite);
                $descripcion .= "...";
            }
            $lista[] = $descripcion;
        }
        return $lista;
    }


    public function  index(Request $request)
    {
        $modelo = new recetas();
        $destacada = $modelo->destacada();
        $mas_destacadas = $modelo->mas_destacadas();
        $nuevas = $modelo->nuevas();

        $lista = $this->cortar_descripcion($nuevas, 120);

       

        return view('index', compact('destacada', 'mas_destacadas', 'nuevas', 'lista'));
    }
}
