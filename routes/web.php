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

  // Rutas para las Secciones
Route::get('/', function () { return view('index'); });

Route::get('/contact', function () { return view('pages.contact'); });
Route::get('/admin', function () { return view('admin.index'); });

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

  // Rutas para el Menu
Route::resource(('/menus'), App\Http\Controllers\MenuController::class);
Route::get('/menus/{menu}/delete',[App\Http\Controllers\MenuController::class, 'delete'])
-> name('menus.delete');


  // Rutas para los Usuarios
Route::resource(('/users'), App\Http\Controllers\UserController::class);
Route::get('/users/{user}/delete',[App\Http\Controllers\UserController::class, 'delete'])
-> name('users.delete');

  // Rutas para las Recetas
Route::resource(('/recipes'), App\Http\Controllers\RecipeController::class);
Route::get('/recipes/{recipe}/delete',[App\Http\Controllers\RecipeController::class, 'delete'])
-> name('recipes.delete');
Route::get('/recipes/{id}/my-recipes',[App\Http\Controllers\RecipeController::class, 'recipesUser'])
-> name('recipes.user');

  // Rutas para los Comentarios
Route::resource(('/comments'), App\Http\Controllers\CommentController::class);
Route::get('/comments/{comment}/delete',[App\Http\Controllers\CommentController::class, 'delete'])
-> name('comments.delete');
Route::get('/comments/{user}/my-comments',[App\Http\Controllers\CommentController::class, 'commentsUser'])
-> name('comments.user');


  // Middleware de control de rutas para acceso de autentificación
// Route::middleware(['auth'])->group(function (){
  // Route::resource(('/products'), App\Http\Controllers\ProductController::class);
// });
