@extends('layout/main_template')

@section('main-section')

<h1>Login</h1>

@dump($errors->all())

<form action="{{route('login.handle')}}" method="POST">
    @csrf
        {{-- Email --}}
    <label for="email">Email</label> <br>
    <input type="email" name="email">
    <br><br>

        {{-- Password --}}
    <label for="password">Password</label> <br>
    <input type="password" name="password">
    <br><br>

    <button type="submit">Confirm</button>
</form>

@endsection
