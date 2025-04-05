@extends('layout/main_template')

@section('admin-section')

<h2 class="ttl-2 fnt-oleo txt-clr-p my-4 ms-5">USERS</h2>

<a class="txt-clr-l ttl-2" href="{{route('users.create')}}">
  <i class="fab-add fa-solid fa-circle-plus"></i>
</a>

<div class="table-responsive">
  <table class="table table-striped tbl-admin">
    <thead>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Role</th>
      <th>Created</th>
      <th>Actions</th>
    </thead>
    <tbody class="table-group-divider">
      @foreach ($users as $usr)
        <tr>
          <td>{{$usr->id}}</td>
          <td>{{$usr->name}}</td>
          <td>{{$usr->email}}</td>
          <td>{{$usr->getRoleNames()->first()}}</td>
          <td>
            {{$usr->created_at->DiffForHumans()}}
          </td>
          <td>
            <div class="d-flex">
              <button type="button" class="btn txt-clr-d" data-bs-toggle="modal" data-bs-target="#mdl-dlt-usr{{$usr->id}}">
                <i class="fa-solid fa-square-minus"></i>
              </button>
            </div>
          </td>
        </tr>
          {{-- Modal de Borrar Menu --}}
        <div class="modal fade" id="mdl-dlt-usr{{$usr->id}}" tabindex="-1" aria-labelledby="mdl-dlt-usr{{$usr->id}}Label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content brdr-0">
              <div class="modal-header bg-clr-p brdr-0 txt-clr-l">
                <h1 class="modal-title fs-5" id="mdl-dlt-usr{{$usr->id}}Label">ALERT!</h1>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete the user: {{$usr->name}}?</p>
                <form action="{{route('users.destroy', $usr->id)}}" method="POST">
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
