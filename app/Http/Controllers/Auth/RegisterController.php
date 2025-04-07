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
    request()->validate([
      'name' => ['required', 'string', 'min:5', 'max:50'],
      'email' => ['required', 'email', 'max:150'],
      'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed']
    ]);

    $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => Hash::make(request('password'))
    ]);

    $user->assignRole('cliente');

    event(new Registered($user));

    Auth::login($user);

    return redirect()->to(RouteServiceProvider::HOME)->with('success', 'User Registed');
  }
}
