<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $users = User::paginate(5);

    return view('admin/users/index', compact('users'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view ('admin/users/create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
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

    $user->assignRole('admin');

    event(new Registered($user));

    return to_route('users.index')->with('success','User Created');
  }

  /**
   * Display the specified resource.
   */
  public function show(User $user)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(User $user)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, User $user)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(User $user)
  {
    $user->delete();
    return to_route('users.index')->with('delete','User Deleted');
  }
}
