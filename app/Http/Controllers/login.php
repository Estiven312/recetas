<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;


class login extends Controller
{
    public function index()
    {
        return view('sistema.login');
    }

    public function validar(Request $request)
    {
        $usuario = new Usuario();
        $email = request()->input('email');
        $password = request()->input('password');

        $validar = $usuario->validar_usuario($email, $password);
        $alerta = 'Email o Password incorrecta';

        if ($validar == True) {
            return view('sistema.home');
        } else {

            return view('sistema.login', compact('alerta'));
        }
    }
}
