@extends('layout/main_template')

@section('main-section')

<h2>USERS</h2>

<table>
  <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Last Modification</th>
    <th>Actions</th>
  </thead>
  <tbody>
    @foreach ($users as $usr)
      <tr>
        <td>{{$usr->id}}</td>
        <td>{{$usr->name}}</td>
        <td>{{$usr->email}}</td>
        <td>
          {{$usr->created_at->DiffForHumans()}}
        </td>
        <td>
          <a type="button" href="{{route('users.delete', $usr)}}">Delete</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
<hr>

<br>
<a href="{{route('users.create')}}"> Add Menu </a>
<br>
<br>

@endsection
