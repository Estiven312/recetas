<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWebRecetas extends Controller
{
    public function index(){
        return view('recetas');
    }
}
