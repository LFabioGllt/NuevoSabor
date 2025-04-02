@extends('layout/main_template')

@section('main-section')

<h2>Recipes</h2>

<table>
    <thead>
        <th>Recipe</th>
        <th>Ingredients</th>
        <th>Instructions</th>
        <th>Recomendation</th>
        <th>Imagen</th>
        <th>Author</th>
        <th>Última Modificación</th>
    </thead>
    <tbody>
        @foreach ($recipes as $rec)
        <tr>
            <td>{{$rec->name_rec}}</td>
            <td>{{$rec->ingredients}}</td>
            <td>{{$rec->instructions}}</td>
            <td>{{$rec->recomendation}}</td>
            <td>
                <img src="/imgs/recipes/{{$rec->image}}" width="50" alt="recipe">
            </td>
            <td>{{$rec->user_id}}</td>
            <td>
                {{$rec->created_at->format('D/m/y H:i a')}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="height: 100px">
    {{$recipes->links()}}
</div>

@endsection
