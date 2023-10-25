<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWebCompras extends Controller
{
    public function index(){
        return view('compras');
    }
}
