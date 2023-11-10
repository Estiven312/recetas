<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;
use App\Models\categorias;
use App\Models\paises;
use PhpParser\Node\Expr\New_;
use App\Models\recetas;
use App\Models\img_adicionals;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


use PhpParser\Node\Expr\AssignOp\Coalesce;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Validator;



class nuevaReceta extends Controller
{


    public function index(Request $request)
    {
        $request = request();
        if ($request->session()->get('name')) {

            $modelo = new paises();
            $modelo1 = new categorias();
            $paises = $modelo->paises();
            $categorias = $modelo1->categorias();
            return view('sistema.nuevaReceta', compact('paises', 'categorias'));
        } else {
            return redirect('/sistema/login');
        }
    }
    public function guardar(Request $request)
    {

        if ($request->session()->get('name')) {




            $receta = new recetas();
            $adicionales = new img_adicionals();
            $nombre = htmlspecialchars(request()->input('nombre'));
            $descripcion = htmlspecialchars(request()->input('descripcion'));
            $tiempo = htmlspecialchars(request()->input('tiempo'));
            $rinde = htmlspecialchars(request()->input('alcanza'));
            $video = htmlspecialchars(request()->input('video'));
            $instrucciones = htmlspecialchars(request()->input('instrucciones'));
            $instrucciones = str_replace('*/', '<li>', $instrucciones);
            $instrucciones = str_replace('/*', '</li>', $instrucciones);

            $ingredientes = htmlspecialchars(request()->input('ingredientes'));

            $ingredientes = str_replace('*/', '<li>', $ingredientes);
            $ingredientes = str_replace('/*', '</li>', $ingredientes);


            $pais = request()->input('lts_pais');
            $categoria = request()->input('lts_categoria');
            if (empty($nombre) || empty($descripcion) || empty($tiempo) || empty($rinde) || empty($instrucciones) || empty($ingredientes) || empty($pais) || empty($categoria)) {
                $modelo = new paises();
                $modelo1 = new categorias();
                $paises = $modelo->paises();
                $categorias = $modelo1->categorias();
                $alerta = 'No puedes dejar campos vacios!';
                return view('sistema.nuevaReceta', compact('alerta', 'paises', 'categorias'));
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
                    /*move_uploaded_file($archivo, public_path('files/' . $nombre_img));*/
                    $filename = pathinfo($path, PATHINFO_FILENAME);
                    $extension = pathinfo($path, PATHINFO_EXTENSION);

                    $nombre_img = $filename . '.' . $extension;
                } else {
                    return "";
                }
            }
            /*Cargar la receta*/

            $id = $receta->guardar($nombre, $descripcion, $pais, $tiempo, $rinde, $ingredientes, $instrucciones, $categoria, $nombre_img, $video, $fechaActual);

            if (isset($_FILES["complementarias"])) {
                $imagenes = $_FILES["complementarias"];
                $archivos_subidos = [];
                foreach ($imagenes["tmp_name"] as $key => $tmp_name) {
                    if ($imagenes["error"][$key] === UPLOAD_ERR_OK) {
                        $extension = pathinfo($imagenes["name"][$key], PATHINFO_EXTENSION);
                        $nombre_img = str_replace(' ', '_', date("Ymdhmsi") . "_$key.$extension"); // Agrega $key al nombre del archivo
                        $archivo = $tmp_name;
                        if (in_array($extension, ["jpeg", "jpg", "jfif", "png", "webp"])) {
                            $path = Storage::putFile('public', $archivo);
                            /*move_uploaded_file($archivo, public_path('files/' . $nombre_img));*/
                            $filename = pathinfo($path, PATHINFO_FILENAME);
                            $extension = pathinfo($path, PATHINFO_EXTENSION);

                            $nombre_img = $filename . '.' . $extension;
                            $archivos_subidos[] = $nombre_img;
                        }
                    }
                }
                foreach ($archivos_subidos as  $archivo) {

                    $adicionales->guardar($id, $archivo);
                }
            }


            return redirect('sistema/recetas');
        } else {
            return redirect('/sistema/login');
        }
    }

    public function update(Request $request, $id)
    {

        $modelo = new paises();
        $modelo1 = new categorias();
        $modelo_receta = new recetas();
        $adicionales = new img_adicionals();

        $paises = $modelo->paises();
        $categorias = $modelo1->categorias();
        $id_receta = $id;
        $receta = $modelo_receta->buscar_id($id);

        $imgs = $adicionales->buscar($id);


        return view('sistema.nuevaReceta', compact('paises', 'categorias', 'receta', 'imgs'));
    }

    public function actualizar(Request $request, $id)
    {
        $request = request();
        if ($request->session()->get('name')) {


            $receta = new recetas();
            $adicionales = new img_adicionals();
            $nombre = htmlspecialchars(request()->input('nombre'));
            $descripcion = htmlspecialchars(request()->input('descripcion'));
            $tiempo = htmlspecialchars(request()->input('tiempo'));
            $rinde = htmlspecialchars(request()->input('alcanza'));
            $video = htmlspecialchars(request()->input('video'));
            $instrucciones = htmlspecialchars(request()->input('instrucciones'));
            $instrucciones = str_replace('*/', '<li>', $instrucciones);
            $instrucciones = str_replace('/*', '</li>', $instrucciones);

            $ingredientes = htmlspecialchars(request()->input('ingredientes'));

            $ingredientes = str_replace('*/', '<li>', $ingredientes);
            $ingredientes = str_replace('/*', '</li>', $ingredientes);


            $pais = request()->input('lts_pais');
            $categoria = request()->input('lts_categoria');

            $receta_id = $receta->buscar_id($id);

            $vistas = $receta_id[0]['visitas'];

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

                if ($extension === "jpeg" || $extension === "jpg" || $extension === "jfif" || $extension === "png" ||  $extension === "webp") {

                    Storage::delete('public/' . $receta_id[0]['imagen']);


                    $path = Storage::putFile('public', $archivo);
                    $filename = pathinfo($path, PATHINFO_FILENAME);
                    $extension = pathinfo($path, PATHINFO_EXTENSION);
                    
                    $nombre_img = $filename . '.' . $extension;
                } else {
                    return "";
                }
            }
            if ($nombre_img == "") {
                $nombre_img = $receta_id[0]['imagen'];
            }



            $receta->actualizar($id, $nombre, $descripcion, $pais, $tiempo, $rinde, $ingredientes, $instrucciones, $categoria, $nombre_img, $video, $vistas, $fechaActual);
            $img_adicional = $adicionales->buscar($id);

            $archivos_subidos = [];
            if (isset($_FILES["complementarias"])) {
                $imagenes = $_FILES["complementarias"];

                foreach ($imagenes["tmp_name"] as $key => $tmp_name) {
                    if ($imagenes["error"][$key] === UPLOAD_ERR_OK) {
                        $extension = pathinfo($imagenes["name"][$key], PATHINFO_EXTENSION);
                        $nombre_img = str_replace(' ', '_', date("Ymdhmsi") . "_$key.$extension"); // Agrega $key al nombre del archivo
                        $archivo = $tmp_name;
                        if (in_array($extension, ["jpeg", "jpg", "jfif", "png", "webp"])) {
                            $path = Storage::putFile('public', $archivo);
                            /*move_uploaded_file($archivo, public_path('files/' . $nombre_img));*/
                            $filename = pathinfo($path, PATHINFO_FILENAME);
                            $extension = pathinfo($path, PATHINFO_EXTENSION);
                            
                            $nombre_img = $filename . '.' . $extension;
                            $archivos_subidos[] = $nombre_img;
                        }
                    }
                }
            }

            if (empty($archivos_subidos)) {
                return redirect('sistema/recetas');
            } else {
                foreach ($img_adicional as $re) {
                    Storage::delete('public/' . $re['nombre']);
                }
                $adicionales->eliminar($id);

                foreach ($archivos_subidos as $key => $archivo) {

                    $adicionales->guardar($id, $archivo);
                }
                return redirect('/sistema/recetas');
            }
        } else {
            return redirect('/sistema/login');
        }
    }





    public function eliminar(Request $request, $id)
    {
        $request = request();
        if ($request->session()->get('name')) {

            $receta = new recetas();
            $adicionales = new img_adicionals();

            $imagenes = $adicionales->eliminar($id);
            foreach ($imagenes as $nombre) {
                Storage::delete('public/' . $nombre['nombre']);
            }
            $img = $receta->eliminar($id);

            Storage::delete('public/' . $img[0]['imagen']);
            return redirect('sistema/recetas');
        } else {
            return redirect('/sistema/login');
        }
    }
}
