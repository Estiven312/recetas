<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\guia as gui;
use App\Models\categoria_guia;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
class guia extends Controller
{

    public function index()
    {
        $request = request();
       
        if ($request->session()->get('name')) {
            $entidad = new gui();
            $numero = 0;
            $guias = $entidad->consultas($numero);
            return view('sistema.guia', compact('guias'));
        } else {
            return redirect('/sistema/login');
        }
    }







    public function nueva()
    {

        $request = request();
        if ($request->session()->get('name')) {
            $modelo1 = new categoria_guia();

            $categorias = $modelo1->categorias();


            return view('sistema.nuevaGuia', compact('categorias'));
        } else {
            return redirect('/sistema/login');
        }
    }



    public function guardar(Request $request)
    {

        if ($request->session()->get('name')) {
            $cargar = new gui();

            $nombre = htmlspecialchars(request()->input('nombre'));
            $descripcion = htmlspecialchars(request()->input('descripcion'));

            $guia = htmlspecialchars(request()->input('guia'));
            $categoria_id = request()->input('lts_categoria');

            if (empty($nombre) || empty($descripcion) || empty($guia)) {

                $modelo1 = new categoria_guia();

                $categorias = $modelo1->categorias();
                $alerta = 'No puedes dejar campos vacios!';

                return view('sistema.nuevaGuia', compact('alerta', 'categorias'));
            }

            // Obtiene la fecha actual
            $fecha = Carbon::now();
            // Establece la zona horaria de Colombia
            $fecha->setTimezone('America/Bogota');
            // Devuelve la fecha en formato año-mes-día
            $fechaActual = $fecha->format('Y-m-d');
            $nombre_img = "";
            $imagenes_guardadas = [];
            if ($_FILES["principal"]["error"] === UPLOAD_ERR_OK) { //Se adjunta imagen
                $extension = pathinfo($_FILES["principal"]["name"], PATHINFO_EXTENSION);
                $nombre_img = str_replace(' ', '_', date("Ymdhmsi") . ".$extension");
                $archivo = $_FILES["principal"]["tmp_name"];

                if ($extension === "jpeg" || $extension === "jpg" || $extension === "jfif" || $extension === "png"  || $extension === "webp") {

                   


                    $path = Storage::putFile('public', $archivo);
                    $filename = pathinfo($path, PATHINFO_FILENAME);
                    $extension = pathinfo($path, PATHINFO_EXTENSION);
                    
                    $nombre_img = $filename . '.' . $extension;
                } else {
                    return "";
                }
            }
            /*Cargar la receta*/

            $id = $cargar->guardar($nombre, $descripcion, $categoria_id, $guia, $nombre_img, $fecha);



            return redirect('sistema/guias');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function update(Request $request, $id)
    {

        if ($request->session()->get('name')) {
            $cargar = new gui();
            $categoria = new categoria_guia();


            $categorias = $categoria->categorias();

            $guia = $cargar->buscar_id($id);
            return view('sistema.nuevaGuia', compact('categorias', 'guia'));
        } else {
            return redirect('/sistema/login');
        }
    }

    public function actualizar(Request $request, $id)
    {
        $request = request();
        if ($request->session()->get('name')) {


            $cargar = new gui();

            $nombre = htmlspecialchars(request()->input('nombre'));
            $descripcion = htmlspecialchars(request()->input('descripcion'));

            $guia = htmlspecialchars(request()->input('guia'));
            $categoria_id = request()->input('lts_categoria');

            if (empty($nombre) || empty($descripcion) || empty($guia)) {

                $modelo1 = new categoria_guia();

                $categorias = $modelo1->categorias();
                $alerta = 'No puedes dejar campos vacios!';

                return view('sistema.nuevaGuia', compact('alerta', 'categorias'));
            }

            // Obtiene la fecha actual
            $fecha = Carbon::now();
            // Establece la zona horaria de Colombia
            $fecha->setTimezone('America/Bogota');
            // Devuelve la fecha en formato año-mes-día
            $fechaActual = $fecha->format('Y-m-d');

            $imagenes_guardadas = [];

            $gu = $cargar->buscar_id($id);
            $cambiar = $gu[0]['imagen'];
            $nombre_img = "$cambiar";





            if ($_FILES["principal"]["error"] === UPLOAD_ERR_OK) { //Se adjunta imagen
                $extension = pathinfo($_FILES["principal"]["name"], PATHINFO_EXTENSION);
                $nombre_img = str_replace(' ', '_', date("Ymdhmsi") . ".$extension");
                $archivo = $_FILES["principal"]["tmp_name"];

                if ($extension === "jpeg" || $extension === "jpg" || $extension === "jfif" || $extension === "png"  || $extension === "webp") {
                    Storage::delete('public/' . $gu[0]['imagen']);

                     $path = Storage::putFile('public', $archivo);
                    $filename = pathinfo($path, PATHINFO_FILENAME);
                    $extension = pathinfo($path, PATHINFO_EXTENSION);
                    
                    $nombre_img = $filename . '.' . $extension;
                } else {
                    return "";
                }
            }
            /*Cargar la receta*/

            $id = $cargar->actualizar($id, $nombre, $descripcion, $categoria_id, $guia, $nombre_img, $fecha);



            return redirect('sistema/guias');
        } else {
            return redirect('/sistema/login');
        }
    }





    public function eliminar(Request $request, $id)
    {
        $request = request();
        if ($request->session()->get('name')) {

            $guia = new gui();
            $img = $guia->eliminar($id);

            Storage::delete('public/' .  $img[0]['imagen']);

            return redirect('sistema/guias');
        } else {
            return redirect('/sistema/login');
        }
    }
    public function busqueda_np(Request $request)
    {
        $request = request();
        if ($request->session()->get('name')) {
            $entidad = new gui();
            $palabra = $request->get('coincidencia');
           
            $numero = $request->get('numero');

            if ($request->get('coincidencia')) {
             
                $palabra = htmlspecialchars($palabra);
                $entidad = new gui();
            
                $guias = $entidad->consultas_palabra($palabra);
                return view('sistema.guia', compact('guias','palabra'));

            } else {
                if ($request->get('numero')||$request->get('numero')===0) {

                   
                    $numero=$numero+15;
                    if($numero===16){
                        $numero=15;
                    }
                    $guias = $entidad->consultas($numero);
                    return view('sistema.guia', compact('guias','numero'));
                
                    
                    
                }
            return redirect('/sistema/guias');
            }
        } else {
            return redirect('/sistema/login');
        }
    }
}
