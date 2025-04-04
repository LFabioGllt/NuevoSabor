@extends('layout/main_template')

@section('main-section')

<section class="container-fluid p-5 bg-clr-w d-flex align-items-center">
  <div class="container">
    <div class="login-container p-3 m-auto">
      <h2 class="ttl-2 fnt-oleo txt-clr-s">Register Recipe</h2>
      {{-- @dump($errors->all()) --}}
      <form action="{{route('recipes.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3"> {{-- Nombre de la Receta --}}
          <label for="name_rec" class="form-label">Recipe Name</label>
          <input type="text" class="form-control brdr-0" name="name_rec" value="{{old('name_rec')}}">
          {{-- @error('name_product') @include('fragments/errorsv') @enderror --}}
        </div>

          {{-- Id del Usuario --}}
        <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>

        <div class="mb-3"> {{-- Ingredientes --}}
          <label for="ingredients" class="form-label">Ingredients</label>
          <textarea name="ingredients" class="form-control brdr-0">{{old('ingredients')}}</textarea>
        </div>

        <div class="mb-3"> {{-- Instrucciones --}}
          <label for="instructions" class="form-label">Instructions</label>
          <textarea name="instructions" class="form-control brdr-0">{{old('instructions')}}</textarea>
        </div>

        <div class="mb-3"> {{-- Recomendaciones --}}
          <label for="recomendation" class="form-label">Recomendation</label>
          <textarea name="recomendation" class="form-control brdr-0">{{old('recomendation')}}</textarea>
        </div>

        <div class="mb-3"> {{-- Imagen --}}
          <label for="image" class="form-label">Image</label> <br>
          <input type="file" class="form-control brdr-0" name="image">
        </div>

        <div class="mb-3"> {{-- Referencia --}}
          <label for="menu_id" class="form-label">Menu type</label> <br>
          <select name="menu_id" class="form-control brdr-0">
            <option value="1">None</option>
            @foreach ($menus as $mn => $id)
              <option value="{{$id}}">{{$mn}}</option>
            @endforeach
          </select>
          <br><br>
        </div>

        <div class="text-end">
          <a type="button" class="btn btn-secondary brdr-0" href="{{route('recipes.user', auth()->user()->id)}}">Cancel</a>
          <button type="submit" class="btn btn-success brdr-0">Create</button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection
