<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



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


        if ($validar[0] === True) {

            // Crear la sesión
            // Iniciamos la sesión
            session()->start();

            // Creamos la sesión
           session(['name' => $validar[1]]);

            return view('sistema.home');
        } else {

            return view('sistema.login', compact('alerta'));
        }
    }

    public function salir(){
        session()->flush();

        // Devolvemos la vista
        return redirect('/sistema/login');
    }
}
