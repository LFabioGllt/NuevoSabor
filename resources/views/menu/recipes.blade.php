<div class="container-fluid py-5 text-center bg-clr-t">
  <h2 class="ttl-2 fnt-oleo txt-clr-p">User Recipes</h2>
  <div class="row mt-4 justify-content-center">
    @foreach ($recipes as $rec)
      <div class="col-md-6 col-lg-4 mb-4 fnt-ssp">
        <div class="card rcp-crd h-100 brdr-0">
          <img src="/imgs/recipes/{{$rec->image}}" class="card-img-top" alt="{{$rec->name_rec}}">
          <div class="text-center p-3">
            <a class="text-decoration-none" href="{{route('recipes.show', $rec)}}">
              <h4 class="txt-clr-s fw-bold">{{$rec->name_rec}}</h4>
            </a>
            <p class="txt-clr-g">{{$rec->recomendation}}</p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
