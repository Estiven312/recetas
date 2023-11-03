<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recetas as receta;



class recetas extends Controller
{
    public function index()
    {
        $request = request();
        if ($request->session()->get('name')) {
            $entidad = new receta();
            $numero = 0;
            $recetas = $entidad->consultas($numero);



            return view('sistema.recetas', compact('recetas'));
        } else {
            return redirect('/sistema/login');
        }
    }
}
