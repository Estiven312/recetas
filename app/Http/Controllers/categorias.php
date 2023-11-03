<?php

namespace App\Http\Controllers;

use App\Models\categorias as cate;
use Illuminate\Http\Request;
use Illuminate\Redis\RedisServiceProvider;

class categorias extends Controller
{
    public function index(){
        $categ = new cate();
        $categorias= $categ->categorias();


        return view('sistema.categoria',compact('categorias'));
    }

    public function nueva(){
        return view('sistema.nuevaCategoria');
    } 

    public function guardar(Request $reques){
        $nombre = htmlspecialchars(request()->input('nombre'));
        echo $nombre;
       

        $modelo= new cate();
    
        $modelo->guardar($nombre);

        return redirect('sistema/categorias');

    }

    public function update($id){
        $modelo= new cate();
        
       
        $categoria=$modelo->buscar_id($id);

        return view('sistema.nuevaCategoria', compact('categoria'));


    }

    

    public function actualizar($id){

        $modelo= new cate();
        
        $nombre = htmlspecialchars(request()->input('nombre'));

        
       
        $categoria=$modelo->actualizar($id,$nombre);
        return redirect('/sistema/categorias');
    }

    public function delete($id){
        $modelo= new cate();
        $modelo->eliminar($id);
        return redirect('/sistema/categorias');
        
    }
}
