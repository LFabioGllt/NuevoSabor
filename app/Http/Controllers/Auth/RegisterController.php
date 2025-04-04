<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    // Mostrar el formulario de registro
  public function show()
  {
    return view('auth.register');
  }

    // Registrar en la BD el usuario registrado
  public function handle()
  {
      // Validación de datos del registro de usuario
    request()->validate([
      'name' => ['required', 'string', 'max:100'],
      'email' => ['required', 'email', 'max:150'],
      'password' => ['required', 'string', 'min:4', 'max:100', 'confirmed']
    ]);

      // Crear el registro en la tabla users
    $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => Hash::make(request('password'))
    ]);

      // Evento de confirmación
    event(new Registered($user));

      // Autenticar una vez registrado
    Auth::login($user);

      // Redireccionar
    return redirect()->to(RouteServiceProvider::HOME)->with('success', 'User Registed');
  }
}
