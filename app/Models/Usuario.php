<?php

namespace App\Models;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Usuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    public function validar_usuario($email, $password)
    {
        $usuario = Usuario::where('email', '=', $email)->get();

        if (count($usuario) == 1) {
            // El usuario existe
            $usuario = $usuario[0];

            $password = request()->input('password');

            $hash = $usuario->password;

            if (Hash::check($password, $hash)) {
                // La contraseña es correcta
                return True;
            } else {
                // La contraseña es incorrecta
                return False;
            }
        } else {
            // El usuario no existe
            return False;
        }
    }
}
