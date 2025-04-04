@extends('layout/main_template')

@section('main-section')

<div class="h-scctn container">
  <ul>
    <li><a href="{{route('menus.index')}}">Menus</a></li>
    <li><a href="">Recipes</a></li>
    <li><a href="{{route('users.index')}}">Users</a></li>
    <li><a href="">Comments</a></li>
  </ul>
</div>

@endsection
