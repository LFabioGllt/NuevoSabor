<div class="container mt-5">
  <div class="p-4 m-auto">
    <h2 class="ttl-2 fnt-oleo txt-clr-p">Comments</h2>

    @if (auth()->user() != null)
      <form action="{{route('comments.store')}}" method="POST">
        @csrf

          {{-- Comentario --}}
        <label for="content">Message</label> <br>
        <textarea name="content" cols="50" rows="2">{{old('content')}}</textarea>
        <br>

          {{-- Id del Usuario --}}
        <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

        <button type="submit"> Comment </button>
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
                <a type="button" href="{{route('comments.edit', $comm)}}">Edit</a>
                <a type="button" href="{{route('comments.delete', $comm)}}">Delete</a>
              </td>
            </tr>
          @endif
          <i class="fas fa-thumbs-up"></i>
          <i class="fas fa-thumbs-down"></i>
        </div>
      </div>
      <br>
    @endforeach
  </div>
</div>
