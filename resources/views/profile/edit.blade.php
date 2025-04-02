@extends('layout/main_template')

@section('main-section')

<h2 >Actualizar {{$recipe->name_rec}}</h2>

<form action="{{route('recipes.update', $recipe->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

        {{-- Nombre de la Receta --}}
    <label for="name_rec">Recipe Name</label> <br>
    <input type="text" name="name_rec" value="{{$recipe->name_rec}}">
    <br><br>

        {{-- Id del Usuario --}}
    <input type="text" name="user_id" value="{{ auth()->user()->id }}" hidden>

        {{-- Ingredientes --}}
    <label for="ingredients">Ingredients</label> <br>
    <textarea name="ingredients" cols="50" rows="5">{{$recipe->ingredients}}</textarea>
    <br><br>

        {{-- Instrucciones --}}
    <label for="instructions">Instructions</label> <br>
    <textarea name="instructions" cols="50" rows="5">{{$recipe->instructions}}</textarea>
    <br><br>

        {{-- Recomendaciones --}}
    <label for="recomendation">Recomendation</label> <br>
    <textarea name="recomendation" cols="50" rows="5">{{$recipe->recomendation}}</textarea>
    <br><br>

        {{-- Imagen --}}
    <label for="image">Image</label> <br>
    <input type="file" name="image" id="formFile">
    <br><br>

    <button type="submit"> Save </button>
</form>

<br>
<a type="button" href="{{route('recipes.index')}}"> Return </a>
<br><br>

@endsection
