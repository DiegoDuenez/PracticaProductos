<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Producto;

class ProductosController extends Controller
{
    
    public function index($id = null){
    
        if($id)
            return response()->json(["producto"=>Producto::find($id)],200);
        return response()->json(["productos"=>Producto::all()],200);

        

    }

    public function save(Request $request){

        $producto = new Producto();

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;

        if($producto->save())
            return response()->json(["producto"=>$producto],201);
         return response()->json(null,400);
    }

    public function edit(Request $request, $id){

        $producto = Producto::findOrFail($id);

        if($id){

        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        
        if($producto->save()){

            return response()->json(["producto"=>$producto],201);

        }
            
         return response()->json(null,400);
         
        }

        return response()->json(null,400);
        



    }

    public function delete($id){

        Producto::destroy($id);
        if($id)
            return response()->json(["productos"=>Producto::all()],200);
        return response()->json(null,400);
    }

}
