<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\recetas;

class home extends Controller
{
    public function index()
    {
        $request = request();
        if ($request->session()->get('name')) {
            $recetas=new recetas();
            $destacada=$recetas->destacada();
            if($destacada!=null){
                return view('sistema.home',compact('destacada'));
            }else{
                return view('sistema.home');
            }
            
            
        } else {
           

            return redirect('/sistema/login');
        }
    }
}
