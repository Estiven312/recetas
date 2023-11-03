<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index()
    {
        $request = request();
        if ($request->session()->get('name')) {

            return view('sistema.home');
        } else {
            return redirect('/sistema/login');
        }
    }
}
