@extends('layout/main_template')

@section('main-section')

<section class="container-fluid bnnr-sctn bnnr-forum">
  <h1 class="text-center fw-bold ttl-1 fnt-oleo txt-clr-l">Forum</h1>
</section>

@include('forum/comments')

@include('forum/faqs')

@include('forum/tutorials')

@endsection
