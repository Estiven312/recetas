<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWebVistaRecetas extends Controller
{
    public function index(){
        return view('vistaReceta');
    }
}
