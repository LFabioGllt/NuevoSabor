@extends('layout/main_template')

@section('main-section')

<a class="txt-clr-l ttl-2" href="{{route('recipes.create')}}">
  <i class="fab-add fa-solid fa-circle-plus"></i>
</a>

<div class="container-fluid py-5 text-center bg-clr-s">
  <h2 class="ttl-2 fnt-oleo txt-clr-q">User Recipes</h2>
  <div class="row mt-4 justify-content-center">
    @foreach ($my_recipes as $rec)
      <div class="col-md-6 col-lg-4 mb-4 fnt-ssp">
        <div class="card my-rcp-crd h-100 brdr-0">
          <img src="/imgs/recipes/{{$rec->image}}" class="card-img-top" alt="{{$rec->name_rec}}">
          <div class="text-center p-3">
            <h4 class="txt-clr-p fw-bold">{{$rec->name_rec}}</h4>
            <a type="button" class="btn txt-clr-g" href="{{route('recipes.show', $rec)}}">
              <i class="fa-solid fa-book-open"></i>
            </a>
            <a type="button" class="btn txt-clr-t" href="{{route('recipes.edit', $rec)}}">
              <i class="fa-solid fa-square-pen"></i>
            </a>
            <button type="button" class="btn txt-clr-d" data-bs-toggle="modal" data-bs-target="#mdl-dlt-rec{{$rec->id}}">
              <i class="fa-solid fa-square-minus"></i>
            </button>
          </div>
        </div>
      </div>
        {{-- Modal de Borrar Receta --}}
      <div class="modal fade" id="mdl-dlt-rec{{$rec->id}}" tabindex="-1" aria-labelledby="mdl-dlt-rec{{$rec->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content fnt-ssp brdr-0">
            <div class="modal-header bg-clr-p brdr-0 txt-clr-l">
              <h1 class="modal-title fs-5 fnt-oleo" id="mdl-dlt-rec{{$rec->id}}Label">ALERT!</h1>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete the recipe: {{$rec->name_rec}}?</p>
              <form action="{{route('menus.destroy', $rec->id)}}" method="POST">
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
  </div>
</div>

@endsection
