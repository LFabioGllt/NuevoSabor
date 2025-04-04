@extends('layout/main_template')

@section('main-section')

<h2>{{$menu->name_menu}}</h2>

<h4>Description</h4>
<p>{{$menu->description}}</p>

<h4>Price</h4>
<p>$ {{$menu->price}}</p>

<hr>
<img src="/imgs/menus/{{ $menu->image }}" width="200" alt="menu">
<hr><br>

<a type="button" href="{{route('menus.index')}}"> Return </a>
<br><br>

@endsection
