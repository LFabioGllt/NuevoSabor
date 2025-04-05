@extends('layout/main_template')

@section('main-section')
  @include('pages/home')
@endsection

@section('admin-section')
  @include('admin/index')
@endsection
