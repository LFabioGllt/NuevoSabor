@extends('layout/main_template')

@section('main-section')

<h2>Regiter Menu</h2>

<form action="{{route('menus.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    {{-- Nombre del Platillo --}}
  <label for="name_menu">Dish Name</label> <br>
  <input type="text" name="name_menu" value="{{old('name_menu')}}">
  <br><br>

    {{-- Descripción --}}
  <label for="description">Description</label> <br>
  <textarea name="description" cols="50" rows="5">{{old('description')}}</textarea>
  <br><br>

    {{-- Precio --}}
  <label for="price">Price</label> <br>
  <input type="text" name="price" value="{{old('price')}}">
  <br><br>

    {{-- Imagen --}}
  <label for="image">Image</label> <br>
  <input type="file" name="image" id="formFile">
  <br><br>

  <button type="submit"> Create </button>
</form>

@endsection
