@extends('layout/main_template')

@section('main-section')

<table>
    <thead>
        Are you sure you want to delete the recipe {{$recipe->name_rec}}?
    </thead>
    <tbody>
        <tr>
            <td>
                <form action="{{route('recipes.index')}}">
                    <button type="submit"> Cancel </button>
                </form>
            </td>
            <td>
                <form action="{{route('recipes.destroy', $recipe->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit"> Confirm </button>
                </form>
            </td>
        </tr>
    </tbody>
</table>

@endsection
