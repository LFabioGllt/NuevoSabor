@extends('layout/main_template')

@section('main-section')

<h2 >Actualizar {{$comment->name_rec}}</h2>

<form action="{{route('comments.update', $comment->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

        {{-- Comentario --}}
    <label for="content">Message</label> <br>
    <textarea name="content" cols="50" rows="5">{{$comment->content}}</textarea>
    <br>

        {{-- Id del Usuario --}}
    <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

    <button type="submit"> Save </button>
</form>

<br>
<a type="button" href="{{route('comments.index')}}"> Return </a>
<br><br>

@endsection
