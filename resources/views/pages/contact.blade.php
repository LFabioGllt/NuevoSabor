@extends('layout/main_template')

@section('main-section')

<section class="container-fluid bnnr-sctn bnnr-contact">
  <h1 class="text-center fw-bold ttl-1 fnt-oleo txt-clr-l">Contact</h1>
</section>

<section class="container-fluid p-5 h-sctn bg-clr-w d-flex align-items-center">
  <div class="container text-center">
    <section>
      <div class="row">
        <div class="col-md-6 d-flex flex-column justify-content-center">
          <h2 class="ttl-2 fnt-oleo txt-clr-p">¿Quiénes Somos?</h2>
          <p>Somos un equipo apasionado por preservar y compartir las recetas ancestrales que han
            pasado de generación en generación, utilizando ingredientes auténticos que nacen
            de la tierra y cuentan historias únicas.</p>
        </div>
        <div class="col-md-6 img-sctn">
          <img src="imgs/banners/image.png"  alt="We">
        </div>
      </div>
    </section>
  </div>
</section>

<section class="container-fluid h-scctn bg-clr-s py-5">
  <div class="container text-center txt-clr-l">
    <div class="row">
      <div class="col-md-6">
        <div class="row g-3 img-sctn">
          <div class="col-6">
            <img src="imgs/banners/image.png" alt="Sucursal 1">
          </div>
          <div class="col-6">
            <img src="imgs/banners/image.png" alt="Sucursal 2">
          </div>
          <div class="col-6">
            <img src="imgs/banners/image.png" alt="Sucursal 3">
          </div>
          <div class="col-6">
            <img src="imgs/banners/image.png" alt="Sucursal 4">
          </div>
        </div>
      </div>
      <div class="col-md-6 d-flex flex-column justify-content-center text-center">
        <h2 class="ttl-2 fnt-oleo txt-clr-p mt-4 mt-md-0">Conoce nuestras sucursales</h2>
        <a type="button" class="btn btn-light mt-3 mx-5 brdr-0" href="#">Ver ubicaciones</a>
      </div>
    </div>
  </div>
</section>


@endsection
