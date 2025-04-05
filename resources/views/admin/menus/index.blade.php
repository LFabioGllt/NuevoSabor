@extends('layout/main_template')

@section('admin-section')

<h2 class="ttl-2 fnt-oleo txt-clr-p my-4 ms-5">MENUS</h2>

<a class="txt-clr-l ttl-2" href="{{route('menus.create')}}">
  <i class="fab-add fa-solid fa-circle-plus"></i>
</a>

<div class="table-responsive">
  <table class="table table-striped tbl-admin">
    <thead>
      <th>ID</th>
      <th>Dish</th>
      <th>Description</th>
      <th>Price</th>
      <th>Image</th>
      <th>Created</th>
      <th>Actions</th>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($menus as $mn)
        <tr>
          <td>{{$mn->id}}</td>
          <td>{{$mn->name_menu}}</td>
          <td>{{$mn->description}}</td>
          <td>{{$mn->price}}</td>
          <td>
            <button type="button" class="btn txt-clr-g" data-bs-toggle="modal" data-bs-target="#mdl-menu{{$mn->id}}">
              <i class="fa-solid fa-image"></i>
            </button>
          </td>
          <td>
            {{$mn->created_at->DiffForHumans()}}
          </td>
          <td>
            <div class="d-flex">
              <a type="button" class="btn txt-clr-t" href="{{route('menus.edit', $mn)}}">
                <i class="fa-solid fa-square-pen"></i>
              </a>
              <button type="button" class="btn txt-clr-d" data-bs-toggle="modal" data-bs-target="#mdl-dlt-mn{{$mn->id}}">
                <i class="fa-solid fa-square-minus"></i>
              </button>
            </div>
          </td>
        </tr>
          {{-- Modal de la Imagen --}}
        <div class="modal fade" id="mdl-menu{{$mn->id}}" tabindex="-1" aria-labelledby="mdl-menu{{$mn->id}}Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content brdr-0">
              <div class="modal-header bg-clr-t brdr-0 txt-clr-l">
                <h1 class="modal-title fs-5" id="mdl-menu{{$mn->id}}Label">{{$mn->name_menu}}</h1>
              </div>
              <div class="modal-body img-sctn">
                <img src="/imgs/menus/{{$mn->image}}" alt="menu">
              </div>
            </div>
          </div>
        </div>
          {{-- Modal de Borrar Menu --}}
        <div class="modal fade" id="mdl-dlt-mn{{$mn->id}}" tabindex="-1" aria-labelledby="mdl-dlt-mn{{$mn->id}}Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content brdr-0">
              <div class="modal-header bg-clr-p brdr-0 txt-clr-l">
                <h1 class="modal-title fs-5" id="mdl-dlt-mn{{$mn->id}}Label">ALERT!</h1>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete the menu: {{$mn->name_menu}}?</p>
                <form action="{{route('menus.destroy', $mn->id)}}" method="POST">
                  @csrf
                  @method('DELETE')

                  <div class="text-end">
                    <button type="button" class="btn btn-secondary brdr-0" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger brdr-0">Confirm</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
