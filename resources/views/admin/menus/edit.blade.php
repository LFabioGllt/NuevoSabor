@extends('layout/main_template')

@section('admin-section')

<section class="container-fluid p-5 bg-clr-w d-flex align-items-center">
  <div class="container">
    <div class="login-container p-3 m-auto">
      <h2 class="ttl-2 fnt-oleo txt-clr-t">Update {{$menu->name_menu}}</h2>
      <form action="{{route('menus.update', $menu->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-3"> {{-- Nombre del Platillo --}}
          <label for="name_menu" class="form-label">Dish Name</label>
          <input type="text" class="form-control brdr-0" name="name_menu" value="{{$menu->name_menu}}">
        </div>

        <div class="mb-3"> {{-- Descripción --}}
          <label for="description" class="form-label">Description</label> <br>
          <textarea name="description" class="form-control brdr-0" cols="50" rows="5">{{$menu->description}}</textarea>
        </div>

        <div class="mb-3"> {{-- Precio --}}
          <label for="price" class="form-label">Price</label> <br>
          <input type="text" class="form-control brdr-0" name="price" value="{{$menu->price}}">
        </div>

        <div class="mb-4"> {{-- Imagen --}}
          <label for="image" class="form-label">Image</label> <br>
          <input type="file" class="form-control brdr-0" name="image" id="formFile">
        </div>

        <div class="text-end">
          <a type="button" class="btn btn-secondary brdr-0" href="{{route('menus.index')}}">Cancel</a>
          <button type="submit" class="btn btn-warning brdr-0">Save</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection
