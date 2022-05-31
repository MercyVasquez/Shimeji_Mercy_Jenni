<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailerController;

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
Route::get('/Eliminar', function () {
    return view('Eliminar');
});
Route::get('/EliminaM', function () {
    return view('EliminaM');
});
Route::get('/Actualiza', function () {
    return view('Actualiza');
});
Route::get('/ActualizaM', function () {
    return view('ActualizaM');
});
Route::get('/Mangas', function () {
    return view('Mangas');
});
Route::get('/AgregaM', function () {
    return view('AgregaM');
});

Route::get('/Registro', function () {
    return view('Register');
 }); 
Route::get('/Login', function () {
    return view('Login');
 }); 

 Route::get('/Inicio', function () {
    return view('inicio');
 }); 
 Route::get('/Admin', function () {
    return view('inicioAdmin');
 }); 
 Route::get('/pago', function () {
    return view('pago');
 }); 

 Route::get('/Carrito', function () {
    return view('Carrito');
 }); 
 Route::get('/user', function () {
   return view('Users');
}); 
Route::get('email', [MailerController::class, 'email'])->name('email'); 

Route::post('composeEmail', [MailerController::class, 'composeEmail'])->name('composeEmail');
//esta es la ruta