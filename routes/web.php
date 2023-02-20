<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

# {id} => Comodin
Route::get('/posts/{id}', function($id){
    dd($id); #dump die => Funcion para depurar, volca el contenido de una variable al navegador
    # Da un esto 500 así que lo que esta despues de esto, no renderizará

    ddd($id); # DEPURAN EL CODIGO


    return response('Post ' . $id);
})-> where('id','[0-9]+'); 
# where(...) Aqui le estoy dando una restricción, donde solo acepta valores del 0 al 9


# REQUEST & QUERY PARAMS
Route::get('/search', function(Request $request){
    dd($request -> name);
});