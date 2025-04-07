@extends('layout/main_template')

@section('main-section')

<section class="container-fluid p-5 bnnr-login d-flex align-items-center">
  <div class="container">
    <div class="login-container fnt-ssp bg-clr-w p-3 m-auto">
      <h2 class="ttl-2 fnt-oleo txt-clr-t">Register</h2>
      {{-- @dump($errors->all()) --}}
      <form action="{{route('register.handle')}}" method="POST">
        @csrf

        <div class="mb-3"> {{-- Nombre --}}
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control brdr-0" name="name">
          @error('name') <span class="txt-clr-d">*{{$message}}</span> @enderror
        </div>

        <div class="mb-3"> {{-- Correo --}}
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control brdr-0" name="email">
          @error('email') <span class="txt-clr-d">*{{$message}}</span> @enderror
        </div>

        <div class="mb-3"> {{-- Contraseña --}}
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control brdr-0" name="password">
          @error('password') <span class="txt-clr-d">*{{$message}}</span> @enderror
        </div>

        <div class="mb-4"> {{-- Confirmar Contraseña --}}
          <label for="password_confirmation" class="form-label">Confirm Password</label>
          <input type="password" class="form-control brdr-0" name="password_confirmation">
        </div>

        <div class="text-end">
          <a href="{{route('login')}}" class="text-decoration-none txt-clr-g m-4">SignIn instead</a>
          <button type="submit" class="btn btn-warning brdr-0">Sign Up</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection

