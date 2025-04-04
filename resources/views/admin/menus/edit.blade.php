@extends('layout/main_template')

@section('main-section')

<h2>Update {{$menu->name_menu}}</h2>

<form action="{{route('menus.update', $menu->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PATCH')

    {{-- Nombre del Platillo --}}
  <label for="name_menu">Dish Name</label> <br>
  <input type="text" name="name_menu" value="{{$menu->name_menu}}">
  <br><br>

    {{-- Descripción --}}
  <label for="description">Description</label> <br>
  <textarea name="description" cols="50" rows="5">{{$menu->description}}</textarea>
  <br><br>

    {{-- Precio --}}
  <label for="price">Price</label> <br>
  <input type="text" name="price" value="{{$menu->price}}">
  <br><br>

    {{-- Imagen --}}
  <label for="image">Image</label> <br>
  <input type="file" name="image" id="formFile">
  <br><br>

  <button type="submit"> Save </button>
</form>

<br>
<a type="button" href="{{route('menus.index')}}"> Return </a>
<br><br>

@endsection
