<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// PRODUCTOS
Route::get("/productos/{id?}","API\ProductosController@index")->where("id","[0-9]+");
Route::post("/productos","API\ProductosController@save");
Route::put("/productos/{id}","API\ProductosController@edit")->where("id","[0-9]+");;
Route::delete("/productos/{id}","API\ProductosController@delete")->where("id","[0-9]+");;

// PERSONAS
Route::get("/personas/{id?}","API\PersonasController@index")->where("id","[0-9]+");
Route::post("/personas","API\PersonasController@save");
Route::put("/personas/{id}","API\PersonasController@edit")->where("id","[0-9]+");;
Route::delete("/personas/{id}","API\PersonasController@delete")->where("id","[0-9]+");;

// COMENTARIOS
Route::get("/comentarios/{id?}","API\ComentariosController@index")->where("id","[0-9]+");
Route::get("/comentarios/persona/{persona}","API\ComentariosController@persCom")->where("persona","[0-9]+");
Route::get("/comentarios/producto/{producto}","API\ComentariosController@prodCom")->where("producto","[0-9]+");
Route::post("/comentarios","API\ComentariosController@save");
Route::put("/comentarios/{id}","API\ComentariosController@edit")->where("id","[0-9]+");;
Route::delete("/comentarios/{id}","API\ComentariosController@delete")->where("id","[0-9]+");;