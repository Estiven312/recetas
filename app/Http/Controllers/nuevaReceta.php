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
use PhpParser\Node\Expr\AssignOp\Coalesce;
use Symfony\Component\CssSelector\Node\FunctionNode;
use Validator;



class nuevaReceta extends Controller
{


    public function index(Request $request)
    {

        $modelo = new paises();
        $modelo1 = new categorias();
        $paises = $modelo->paises();
        $categorias = $modelo1->categorias();
        return view('sistema.nuevaReceta', compact('paises', 'categorias'));
    }
    public function guardar(Request $request)
    {
       
      



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
                move_uploaded_file($archivo, public_path('files/' . $nombre_img));
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
                        move_uploaded_file($archivo, public_path('files/' . $nombre_img));
                        $archivos_subidos[] = $nombre_img;
                    }
                }
            }
            foreach ($archivos_subidos as  $archivo) {

                $adicionales->guardar($id, $archivo);
            }
        }


        return redirect('sistema/recetas');
    }

    public function update(Request $request, $id)
    {

        $modelo = new paises();
        $modelo1 = new categorias();
        $modelo_receta = new recetas();
        $paises = $modelo->paises();
        $categorias = $modelo1->categorias();
        $id_receta = $id;
        $receta = $modelo_receta->buscar_id($id);
        return view('sistema.nuevaReceta', compact('paises', 'categorias', 'receta'));
    }

    public function actualizar(Request $request, $id)
    {

       
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
                $imagen = public_path('files/' . $receta_id[0]['imagen']);
                unlink($imagen, null);
                move_uploaded_file($archivo, public_path('files/' . $nombre_img));
            } else {
                return "";
            }
        }
        if ($nombre_img == "") {
            $nombre_img = $receta_id[0]['imagen'];
        }

       

        $receta->actualizar($id, $nombre, $descripcion, $pais, $tiempo, $rinde, $ingredientes, $instrucciones, $categoria, $nombre_img, $video, $fechaActual);
        $img_adicional = $adicionales->buscar($id);


        if (isset($_FILES["complementarias"])) {
            $imagenes = $_FILES["complementarias"];
            $archivos_subidos = [];
            foreach ($imagenes["tmp_name"] as $key => $tmp_name) {
                if ($imagenes["error"][$key] === UPLOAD_ERR_OK) {
                    $extension = pathinfo($imagenes["name"][$key], PATHINFO_EXTENSION);
                    $nombre_img = str_replace(' ', '_', date("Ymdhmsi") . "_$key.$extension"); // Agrega $key al nombre del archivo
                    $archivo = $tmp_name;
                    if (in_array($extension, ["jpeg", "jpg", "jfif", "png", "webp"])) {
                        move_uploaded_file($archivo, public_path('files/' . $nombre_img));
                        $archivos_subidos[] = $nombre_img;
                    }
                }
            }
            foreach ($img_adicional as $re) {
                $imagen = public_path('files/' . $re['nombre']);
                unlink($imagen, null);
            }
            $adicionales->eliminar($id);

            foreach ($archivos_subidos as $key => $archivo) {

                $adicionales->guardar($id, $archivo);
            }
        }
        return redirect('sistema/recetas');
    }





    public function eliminar(Request $request, $id)
    {

        $receta = new recetas();
        $adicionales = new img_adicionals();

        $imagenes = $adicionales->eliminar($id);
        foreach ($imagenes as $nombre) {
            $imagen_path = public_path('files/' . $nombre['nombre']);
            unlink($imagen_path, null);
        }
        $img = $receta->eliminar($id);
        $imagen = public_path('files/' . $img[0]['imagen']);
        unlink($imagen, null);

        return redirect('sistema/recetas');
    }
}
