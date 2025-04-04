@extends('layout/main_template')

@section('main-section')

<table>
  <thead>
    Are you sure you want to delete the menu {{$menu->name_menu}}?
  </thead>
  <tbody>
    <tr>
      <td>
        <form action="{{route('menus.index')}}">
          <button type="submit"> Cancel </button>
        </form>
      </td>
      <td>
        <form action="{{route('menus.destroy', $menu->id)}}" method="POST">
          @csrf
          @method('DELETE')

          <button type="submit"> Confirm </button>
        </form>
      </td>
    </tr>
  </tbody>
</table>

@endsection
