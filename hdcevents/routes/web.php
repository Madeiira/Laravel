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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contactform', function(){
   

    $ipaddress = $_SERVER['SERVER_NAME']; // get IP for user
    //['chave a ser usada como variavel dentro da viel' => $Valor] 
    $permissao = 0;
    return view('contactform', ['ipaddress' => $ipaddress, 'bool' => $permissao]);
}); 