@extends('layout/main_template')

@section('main-section')

<h1>Register</h1>

@dump($errors->all())

<form action="{{route('register.handle')}}" method="POST">
  @csrf
    {{-- Name --}}
  <label for="name">Name</label> <br>
  <input type="text" name="name">
  <br><br>

    {{-- Email --}}
  <label for="email">Email</label> <br>
  <input type="email" name="email">
  <br><br>

    {{-- Password --}}
  <label for="password">Password</label> <br>
  <input type="password" name="password">
  <br><br>

    {{-- Password Confirmation --}}
  <label for="password_confirmation">Confirm Password</label> <br>
  <input type="password" name="password_confirmation">
  <br><br>

  <button type="submit">Sign Up</button>
</form>

@endsection

