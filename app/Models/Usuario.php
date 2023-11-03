<?php

namespace App\Models;

use App\Models\Usuario as ModelsUsuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\Type\TrueType;
use sesion;

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
            $name=$usuario->name;

            $lista=[];

            $hash = $usuario->password;

           
           
            $validar=Hash::check($password, $hash);
         

            if ($validar) {
                
                $lista=[True,$name];
                return $lista ;
            } else {
                // La contraseña es incorrecta
                $lista=[False, ''];
                return $lista;
            }

        } else {
            // El usuario no existe
            $lista=[False, ''];
            return $lista;
            
        }
    }

}
