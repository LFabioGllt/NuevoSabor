@extends('layout/main_template')

@section('main-section')

<section class="container-fluid bnnr-sctn bnnr-menu">
  <h1 class="text-center fw-bold ttl-1 fnt-oleo txt-clr-l">Menu</h1>
</section>

@include('menu/dishes')

@include('menu/recipes')

@endsection
