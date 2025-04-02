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

Route::get('/', function () {
    return view('index');
});

Route::get('/menu', function () {
    return view('pages.menu');
});

Route::get('/forum', function () {
    return view('pages.forum');
});

Route::get('/contact', function () {
    return view('pages.contact');
});


    // Rutas para el Registro
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'show'])
->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'handle'])
->name('register.handle');

    // Rutas para Login y Logout
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'show'])
->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'handle'])
->name('login.handle');

Route::post('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'handle'])
->name('logout.handle');

    // Middleware de control de rutas para acceso de autentificación
// Route::middleware(['auth'])->group(function (){
    // Route::resource(('/products'), App\Http\Controllers\ProductController::class);
// });
