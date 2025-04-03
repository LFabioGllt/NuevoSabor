@extends('layout/main_template')

@section('main-section')

<h2>Comments</h2>

@if (auth()->user() != null)
    <form action="{{route('comments.store')}}" method="POST">
        @csrf
            {{-- Comentario --}}
        <label for="content">Message</label> <br>
        <textarea name="content" cols="50" rows="5">{{old('content')}}</textarea>
        <br>

            {{-- Id del Usuario --}}
        <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

        <button type="submit"> Comment </button>
    </form>
    <br>
@endif

@foreach ($comments as $comm)
    <table style="margin-inline-start: 10px;">
        <tbody>
            <tr>
                <td>- <b>{{$comm->user_id}}</b></td>
            </tr>
            <tr>
                <td>{{$comm->content}}</td>
            </tr>
            <tr>
                <td><small>{{$comm->created_at->DiffForHumans()}}</small></td>
            </tr>
            @if (auth()->user() != null && auth()->user()->id == $comm->user_id)
                <tr>
                    <td>
                        <a type="button" href="{{route('comments.edit', $comm)}}">Edit</a>
                        <a type="button" href="{{route('comments.delete', $comm)}}">Delete</a>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <br>
@endforeach

@endsection
