@extends('layout/main_template')

@section('main-section')

<h2>Regiter Recipe</h2>

<form action="{{route('recipes.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
    {{-- Nombre de la Receta --}}
  <label for="name_rec">Recipe Name</label> <br>
  <input type="text" name="name_rec" value="{{old('name_rec')}}">
  {{-- @error('name_product') @include('fragments/errorsv') @enderror --}}
  <br><br>

    {{-- Id del Usuario --}}
  <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

    {{-- Ingredientes --}}
  <label for="ingredients">Ingredients</label> <br>
  <textarea name="ingredients" cols="50" rows="5">{{old('ingredients')}}</textarea>
  <br><br>

    {{-- Instrucciones --}}
  <label for="instructions">Instructions</label> <br>
  <textarea name="instructions" cols="50" rows="5">{{old('instructions')}}</textarea>
  <br><br>

    {{-- Recomendaciones --}}
  <label for="recomendation">Recomendation</label> <br>
  <textarea name="recomendation" cols="50" rows="5">{{old('recomendation')}}</textarea>
  <br><br>

    {{-- Imagen --}}
  <label for="image">Image</label> <br>
  <input type="file" name="image" id="formFile">
  <br><br>

    {{-- Referencia --}}
  <label for="menu_id">Menu</label> <br>
  <select name="menu_id">
    <option value="1">Selected...</option>
    @foreach ($menus as $mn => $id)
      <option value="{{$id}}">{{$mn}}</option>
    @endforeach
  </select>
  <br><br>

  <button type="submit"> Create </button>
</form>

@endsection
