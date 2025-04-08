<section class="container-fluid py-5">
  <div class="container">
    <div class="row mt-4 justify-content-center">
      @foreach ($menus as $mn)
        <div class="col-md-6 mb-4 fnt-ssp">
          <div class="card dsh-crd h-100 brdr-0">
            <div class="row g-0">
              <div class="col-3">
                <img src="/imgs/menus/{{$mn->image}}" class="img-fluid rounded-start" alt="{{$mn->name_menu}}">
              </div>
              <div class="col-8 mt-3 ms-3">
                <h4 class="txt-clr-b fw-bold">{{$mn->name_menu}}</h4>
                <p class="txt-clr-g">{{$mn->description}}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
