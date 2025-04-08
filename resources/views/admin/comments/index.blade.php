@extends('layout/main_template')

@section('admin-section')

<section class="container-fluid p-5 bg-clr-w">
  <h2 class="ttl-2 fnt-oleo txt-clr-p my-4 ms-5">COMMENTS</h2>

  <div class="table-responsive">
    <table class="table table-striped tbl-admin fnt-ssp">
      <thead>
        <th>ID</th>
        <th>User</th>
        <th>Comment</th>
        <th>Created</th>
        <th>Actions</th>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($comments as $cmnt)
          <tr>
            <td>{{$cmnt->id}}</td>
            <td>{{$cmnt->user_id}}</td>
            <td>{{$cmnt->content}}</td>
            <td>
              {{$cmnt->created_at->DiffForHumans()}}
            </td>
            <td>
              <div class="d-flex">
                <button type="button" class="btn txt-clr-d" data-bs-toggle="modal" data-bs-target="#mdl-dlt-cmnt{{$cmnt->id}}">
                  <i class="fa-solid fa-square-minus"></i>
                </button>
              </div>
            </td>
          </tr>
            {{-- Modal de Borrar Comentario --}}
          <div class="modal fade" id="mdl-dlt-cmnt{{$cmnt->id}}" tabindex="-1" aria-labelledby="mdl-dlt-cmnt{{$cmnt->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content brdr-0 fnt-ssp">
                <div class="modal-header bg-clr-p brdr-0 txt-clr-l">
                  <h1 class="modal-title fs-5 fnt-oleo" id="mdl-dlt-cmnt{{$cmnt->id}}Label">ALERT!</h1>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete the comment?</p>
                  <form action="{{route('comments.destroy.admin', $cmnt->id)}}" method="POST">
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
</section>

@endsection
