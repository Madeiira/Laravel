<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

Route::get('/contactform', function(){
   

    $ipaddress = $_SERVER['SERVER_NAME']; // get IP for user
    //['key to use in view ' => $value] 
    $permissao = 1; // bool

    $arr = ["João", "José", "Joseph"];

    return view('contactform', 
    [
        'ipaddress' => $ipaddress,
        'bool'      => $permissao,
        'nomes'     => $arr

    ]);

    
}); 

Route::get('/products', function(){

    $search = request('search');

    return view('products',
    [
        'search' => $search
    ]);
});


Route::get('/product/{id?}', function($id = null ){ //Use Paramenter
    return view('product',
    [
        'id' => $id
    ]);
});

