@extends('layout/main_template')

@section('main-section')

<h2>MENUS</h2>

<table>
  <thead>
    <th>Dish</th>
    <th>Description</th>
    <th>Price</th>
    <th>Image</th>
    <th>Last Modification</th>
    <th>Actions</th>
  </thead>
  <tbody>
    @foreach ($menus as $mn)
      <tr>
        <td>{{$mn->name_menu}}</td>
        <td>{{$mn->description}}</td>
        <td>{{$mn->price}}</td>
        <td>
          <img src="/imgs/menus/{{$mn->image}}" width="50" alt="mnipe">
        </td>
        <td>
          {{$mn->created_at->DiffForHumans()}}
        </td>
        <td>
          <a type="button" href="{{route('menus.show', $mn)}}">?</a>
          <a type="button" href="{{route('menus.edit', $mn)}}">Edit</a>
          <a type="button" href="{{route('menus.delete', $mn)}}">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<hr>

<br>
<a href="{{route('menus.create')}}"> Add Menu </a>
<br>
<br>

@endsection
