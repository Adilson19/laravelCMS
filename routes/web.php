<?php

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
//   Route padrao - Parte Frontal do Sistema
Route::get('/', 'Site\HomeController@index');

// Painel Admin - Parte Administrativa do Sistema
Route::prefix('painel')->group(function (){
    //  Rotas do painel
    Route::get('/', 'Admin\HomeController@index');
}); 