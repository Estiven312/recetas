<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWebVistaGuia extends Controller
{
    public function index(){
        return view('vistaGuia');
    }
}
