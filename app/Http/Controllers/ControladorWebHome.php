<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Usuario;

class ControladorWebHome extends Controller
{
    public function  index(Request $request)
    {

    
      

            return view("index");
      
    }
}
