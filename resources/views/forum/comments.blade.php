<div class="container mt-5">
  <div class="p-4 m-auto fnt-ssp">
    <h2 class="ttl-2 fnt-oleo txt-clr-p">Comments</h2>

    @if (auth()->user() != null)
      <form action="{{route('comments.store')}}" method="POST" class="text-end">
        @csrf

        <div class="mb-3 text-start"> {{-- Commentario --}}
          <label for="content" class="form-label">Message</label> <br>
          <textarea name="content" class="form-control brdr-0">{{old('content')}}</textarea>
          @error('content') <span class="txt-clr-d">*{{$message}}</span> @enderror
        </div>

          {{-- Id del Usuario --}}
        <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

        <button type="submit" class="btn btn-secondary brdr-0"> Comment </button>
      </form>
      <br>
    @endif

    @foreach ($comments as $comm)
      <div class="comment p-2">
        <img src="user1.jpg" alt="User">
        <div class="comment-content">
          <strong>@ {{$comm->user_id}}</strong>
          <span class="text-muted">{{$comm->created_at->DiffForHumans()}}</span>
          <p class="txt-clr-g my-1">{{$comm->content}}</p>
        </div>
        <div class="comment-actions d-flex txt-clr-g">
          @if (auth()->user() != null && auth()->user()->id == $comm->user_id)
            <tr>
              <td>
                <button type="button" class="btn txt-clr-t" data-bs-toggle="modal" data-bs-target="#mdl-edt-com{{$comm->id}}">
                    <i class="fa-solid fa-square-pen"></i>
                </button>
                <button type="button" class="btn txt-clr-d" data-bs-toggle="modal" data-bs-target="#mdl-dlt-com{{$comm->id}}">
                  <i class="fa-solid fa-square-minus"></i>
                </button>
              </td>
            </tr>

              {{-- Modal de Editar Comentario --}}
            <div class="modal fade" id="mdl-edt-com{{$comm->id}}" tabindex="-1" aria-labelledby="mdl-edt-com{{$comm->id}}Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content brdr-0 fnt-ssp">
                  <div class="modal-header bg-clr-t brdr-0 txt-clr-l">
                    <h1 class="modal-title fs-5 fnt-oleo" id="mdl-edt-com{{$comm->id}}Label">Edit comment</h1>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('comments.update', $comm->id)}}" method="POST">
                      @csrf
                      @method('PATCH')

                      <div class="mb-3"> {{-- Commentario --}}
                        <label for="content" class="form-label">Message</label> <br>
                        <textarea name="content" class="form-control brdr-0">{{$comm->content}}</textarea>
                        @error('content') <span class="txt-clr-d">*{{$message}}</span> @enderror
                      </div>

                        {{-- Id del Usuario --}}
                      <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

                      <div class="text-end">
                        <button type="button" class="btn btn-secondary brdr-0" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning brdr-0">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

              {{-- Modal de Borrar Comentario --}}
            <div class="modal fade" id="mdl-dlt-com{{$comm->id}}" tabindex="-1" aria-labelledby="mdl-dlt-com{{$comm->id}}Label" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content brdr-0 fnt-ssp">
                  <div class="modal-header bg-clr-p brdr-0 txt-clr-l">
                    <h1 class="modal-title fs-5 fnt-oleo" id="mdl-dlt-com{{$comm->id}}Label">ALERT!</h1>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete the comment?</p>
                    <form action="{{route('comments.destroy', $comm->id)}}" method="POST">
                      @csrf
                      @method('DELETE')

                      <div class="text-end">
                        <button type="button" class="btn btn-secondary brdr-0" data-bs-dismiss="modal">Cancel</button>
                        <button button type="submit" class="btn btn-danger brdr-0">Confirm</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          @endif
          <i class="fas fa-thumbs-up comm-act m-2"></i>
          <i class="fas fa-thumbs-down comm-act m-2"></i>
        </div>
      </div>
      <br>
    @endforeach
  </div>
</div>
