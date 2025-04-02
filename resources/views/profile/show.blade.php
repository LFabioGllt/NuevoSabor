@extends('layout/main_template')

@section('main-section')

<h2>{{$recipe->name_rec}}</h2>

<h4>Ingredients</h4>
<p>{{$recipe->ingredients}}</p>

<h4>Instructions</h4>
<p>{{$recipe->instructions}}</p>

<h4>Recomendation</h4>
<p>{{$recipe->recomendation}}</p>
<br>

<hr>
<img src="/imgs/recipes/{{ $recipe->image }}" width="200" alt="recipe">
<hr><br>

<a type="button" href="{{route('recipes.index')}}"> Return </a>
<br><br>

@endsection
