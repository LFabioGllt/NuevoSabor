@extends('layout/main_template')

@section('main-section')

<h2>My recipes</h2>

<table>
    <thead>
        <th>Recipe</th>
        <th>Ingredients</th>
        <th>Instructions</th>
        <th>Recomendation</th>
        <th>Imagen</th>
        <th>Última Modificación</th>
        <th>Acciones</th>
    </thead>
    <tbody>
        @foreach ($my_recipes as $rec)
        <tr>
            <td>{{$rec->name_rec}}</td>
            <td>{{$rec->ingredients}}</td>
            <td>{{$rec->instructions}}</td>
            <td>{{$rec->recomendation}}</td>
            <td>
                <img src="/imgs/recipes/{{$rec->image}}" width="50" alt="recipe">
            </td>
            <td>
                {{-- {{$p->created_at->DiffForHumans()}} --}}
                {{$rec->created_at->format('D/m/y H:i a')}}
            </td>
            <td>
                <a type="button" href="{{route('recipes.show', $rec)}}">?</a>
                <a type="button" href="{{route('recipes.edit', $rec)}}">Edit</a>
                <a type="button" href="{{route('recipes.delete', $rec)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr>

<br>
<a href="{{route('recipes.create')}}"> Add Recipe </a>
<br>
<br>

@endsection
