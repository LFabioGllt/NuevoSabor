@extends('layout/main_template')

@section('main-section')

<section class="container-fluid p-5 bg-clr-w d-flex align-items-center">
  <div class="container">
    <div class="login-container p-3 m-auto">
      <h2 class="ttl-2 fnt-oleo txt-clr-s">Add Menu</h2>
      {{-- @dump($errors->all()) --}}
      <form action="{{route('menus.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3"> {{-- Nombre del Platillo --}}
          <label for="name_menu" class="form-label">Dish Name</label>
          <input type="text" class="form-control brdr-0" name="name_menu" value="{{old('name_menu')}}">
        </div>

        <div class="mb-3"> {{-- Descripción --}}
          <label for="description" class="form-label">Description</label>
          <textarea name="description" class="form-control brdr-0">{{old('description')}}</textarea>
        </div>

        <div class="mb-3"> {{-- Precio --}}
          <label for="price" class="form-label">Price</label>
          <input type="text" class="form-control brdr-0" name="price" value="{{old('price')}}">
        </div>

        <div class="mb-4"> {{-- Imagen --}}
          <label for="image" class="form-label">Image</label>
          <input type="file" class="form-control brdr-0" name="image">
        </div>

        <div class="text-end">
          <a type="button" class="btn btn-secondary brdr-0" href="{{route('menus.index')}}">Cancel</a>
          <button type="submit" class="btn btn-success brdr-0">Create</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection
