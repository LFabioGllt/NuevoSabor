@extends('layout/main_template')

@section('main-section')

<section class="container-fluid p-5 h-sctn bg-clr-w d-flex align-items-center">
  <div class="container">
    <div class="login-container p-3 m-auto">
      <h2 class="ttl-2 fnt-oleo txt-clr-s">Login</h2>
      {{-- @dump($errors->all()) --}}
      <form action="{{route('login.handle')}}" method="POST">
        @csrf

        <div class="mb-3"> {{-- Correo --}}
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control brdr-0" name="email">
        </div>

        <div class="mb-4"> {{-- Password --}}
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control brdr-0" name="password">
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-success brdr-0">Sign In</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection
