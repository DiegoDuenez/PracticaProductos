<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modelos\Persona;

class PersonasController extends Controller
{
    
    public function index($id = null){
    
        if($id)
            return response()->json(["persona"=>Persona::find($id)],200);
        return response()->json(["personas"=>Persona::all()],200);

        

    }

    public function save(Request $request){

        $persona = new Persona();

        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;

        if($persona->save())
            return response()->json(["persona"=>$persona],201);
         return response()->json(null,400);
    }

    public function edit(Request $request, $id){

        $persona = Persona::findOrFail($id);

        if($id){

        $persona->nombre = $request->nombre;
        $persona->apellido_paterno = $request->apellido_paterno;
        $persona->apellido_materno = $request->apellido_materno;
        
        if($persona->save()){

            return response()->json(["persona"=>$persona],201);

        }
            
         return response()->json(null,400);
         
        }

        return response()->json(null,400);
        



    }

    public function delete($id){

        Persona::destroy($id);
        if($id)
            return response()->json(["personas"=>Persona::all()],200);
        return response()->json(null,400);
    }


}
