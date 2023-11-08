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

    public function busqueda_np(Request $request)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $palabra = $request->get('coincidencia');
           
            $numero = $request->get('numero');

            if ($request->get('coincidencia')) {
             
                $palabra = htmlspecialchars($palabra);
                $entidad = new receta();
            
                $recetas = $entidad->consultas_palabra($palabra);
                return view('sistema.recetas', compact('recetas','palabra'));

            } else {
                if ($request->get('numero')||$request->get('numero')===0) {

                    $entidad = new receta();
                    $numero=$numero+15;
                    if($numero===16){
                        $numero=15;
                    }
                    $recetas = $entidad->consultas($numero);
                    return view('sistema.recetas', compact('recetas','numero'));
                
                    
                    
                }
            return redirect('/sistema/recetas');
            }
        } else {
            return redirect('/sistema/login');
        }
    }
}
