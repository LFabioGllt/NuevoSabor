@extends('layout/main_template')

@section('main-section')

<table>
  <thead>
    Are you sure you want to delete the user {{$user->name}}?
  </thead>
  <tbody>
    <tr>
      <td>
        <form action="{{route('users.index')}}">
          <button type="submit"> Cancel </button>
        </form>
      </td>
      <td>
        <form action="{{route('users.destroy', $user->id)}}" method="POST">
          @csrf
          @method('DELETE')

          <button type="submit"> Confirm </button>
        </form>
      </td>
    </tr>
  </tbody>
</table>

@endsection
