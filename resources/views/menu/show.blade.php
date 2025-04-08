@extends('layout/main_template')

@section('main-section')

<section class="container-fluid text-center p-5 bg-clr-w">
  <hr>
  <img class="img-rcp" src="/imgs/recipes/{{ $recipe->image }}" alt="recipe">
  <hr>

  <h2>{{$recipe->name_rec}}</h2>

  <div class="text-start">
    <h4>Ingredients</h4>
    <p>{{$recipe->ingredients}}</p>

    <h4>Instructions</h4>
    <p>{{$recipe->instructions}}</p>

    <h4>Recomendation</h4>
    <p>{{$recipe->recomendation}}</p>
    <br>
  </div>
</section>

@endsection
