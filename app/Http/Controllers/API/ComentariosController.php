<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Comentario;
use DB;

class ComentariosController extends Controller
{
    
    public function index($id = null){
    
        if($id)
            return response()->json(["comentario"=>Comentario::find($id)],200);
         return response()->json(["comentarios"=>Comentario::all()],200);


    }
    public function persCom($persona = null){


        if($persona)
            return response()->json(["comentarios"=>Comentario::all()->where('persona', $persona)]);
        return response()->json(null,400);

    }
    public function prodCom($producto = null){


        if($producto)
            return response()->json(["comentarios"=>Comentario::all()->where('producto', $producto)]);
        return response()->json(null,400);

    }

    
    public function save(Request $request){

        $comentario = new Comentario();

        $comentario->titulo = $request->titulo;
        $comentario->contenido = $request->contenido;
        $comentario->persona = $request->persona;
        $comentario->producto = $request->producto;

        if($comentario->save())
            return response()->json(["comentario"=>$comentario],201);
         return response()->json(null,400);
    }

    public function edit(Request $request, $id){

        $comentario = Comentario::findOrFail($id);

        if($id){

            $comentario->titulo = $request->titulo;
            $comentario->contenido = $request->contenido;
            $comentario->persona = $request->persona;
            $comentario->producto = $request->producto;
        
        if($comentario->save()){

            return response()->json(["comentario"=>$comentario],201);

        }
            
         return response()->json(null,400);
         
        }

        return response()->json(null,400);
        



    }

    public function delete($id){

        Comentario::destroy($id);
        if($id)
            return response()->json(["comentarios"=>Comentario::all()],200);
        return response()->json(null,400);
    }

}
