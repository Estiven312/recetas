<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorWebHome extends Controller
{
    public function  index(){
        return view("index");
    }
}
