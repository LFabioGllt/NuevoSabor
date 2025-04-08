@extends('layout/main_template')

@section('admin-section')

<section class="container-fluid p-5 bg-clr-w">
  <h2 class="ttl-2 fnt-oleo txt-clr-p mx-5">RECIPES</h2>

  <div class="table-responsive">
    <table class="table table-striped tbl-admin fnt-ssp">
      <thead>
        <th>ID</th>
        <th>Recipe</th>
        <th>Ingredients</th>
        <th>Instructions</th>
        <th>Recomendation</th>
        <th>Image</th>
        <th>Menu</th>
        <th>Created</th>
        <th>Actions</th>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($recipes as $rec)
          <tr>
            <td>{{$rec->id}}</td>
            <td>{{$rec->name_rec}}</td>
            <td>{{$rec->ingredients}}</td>
            <td>{{$rec->instructions}}</td>
            <td>{{$rec->recomendation}}</td>
            <td>
              <button type="button" class="btn txt-clr-g" data-bs-toggle="modal" data-bs-target="#mdl-rec{{$rec->id}}">
                <i class="fa-solid fa-image"></i>
              </button>
            </td>
            <td>{{$rec->menu_id}}</td>
            <td>
              {{$rec->created_at->DiffForHumans()}}
            </td>
            <td>
              <div class="d-flex">
                <a type="button" class="btn txt-clr-t" href="{{route('recipes.edit.admin', $rec)}}">
                  <i class="fa-solid fa-square-pen"></i>
                </a>
                <button type="button" class="btn txt-clr-d" data-bs-toggle="modal" data-bs-target="#mdl-dlt-rec{{$rec->id}}">
                  <i class="fa-solid fa-square-minus"></i>
                </button>
              </div>
            </td>
          </tr>
            {{-- Modal de la Imagen --}}
          <div class="modal fade" id="mdl-rec{{$rec->id}}" tabindex="-1" aria-labelledby="mdl-rec{{$rec->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content brdr-0 fnt-ssp">
                <div class="modal-header bg-clr-t brdr-0 txt-clr-l">
                  <h1 class="modal-title fs-5" id="mdl-rec{{$rec->id}}Label">{{$rec->name_rec}}</h1>
                </div>
                <div class="modal-body img-sctn">
                  <img src="/imgs/recipes/{{$rec->image}}" alt="recipe">
                </div>
              </div>
            </div>
          </div>
            {{-- Modal de Borrar Receta --}}
          <div class="modal fade" id="mdl-dlt-rec{{$rec->id}}" tabindex="-1" aria-labelledby="mdl-dlt-rec{{$rec->id}}Label" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content brdr-0 fnt-ssp">
                <div class="modal-header bg-clr-p brdr-0 txt-clr-l">
                  <h1 class="modal-title fs-5 fnt-oleo" id="mdl-dlt-rec{{$rec->id}}Label">ALERT!</h1>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to delete the recipe: {{$rec->name_rec}}?</p>
                  <form action="{{route('recipes.destroy.admin', $rec->id)}}" method="POST">
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
      </tbody>
    </table>
  </div>
</section>

@endsection
