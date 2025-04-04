<section class="container-fluid py-5">
  <div class="container">
    <div class="row mt-4 justify-content-center">
      @foreach ($recipes as $rec)
        <div class="col-md-6 mb-4 fnt-ssp">
          <div class="card dsh-crd h-100 brdr-0">
            <div class="row g-0">
              <div class="col-3">
                <img src="/imgs/recipes/{{$rec->image}}" class="img-fluid rounded-start" alt="{{$rec->name_rec}}">
              </div>
              <div class="col-8 mt-3 ms-3">
                <a class="text-decoration-none" href="{{route('recipes.show', $rec)}}">
                  <h4 class="txt-clr-b fw-bold">{{$rec->name_rec}}</h4>
                </a>
                <p class="txt-clr-g">{{$rec->recomendation}}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
