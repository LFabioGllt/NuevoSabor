@extends('layout/main_template')

@section('main-section')

<section class="container-fluid bnnr-sctn bnnr-contact">
  <h1 class="text-center fw-bold ttl-1 fnt-oleo txt-clr-l">Contact</h1>
</section>

<div class="container">
  <div class="contact-section">
    <div class="header">
      <span>Nutricionista - Dr. Fabio Rocha</span>
      <img src="doctor.jpg" alt="Dr. Fabio Rocha">
    </div>
    <div class="contact-info">
      <p><i class="fas fa-map-marker-alt"></i>Heroico Colegio Militar, Manantiales, 93400 Papantla, Ver.</p>
      <p><i class="fas fa-envelope"></i> contacto@sabortot.com</p>
      <p><i class="fas fa-phone"></i> +527848422144</p>
      <button class="btn btn-warning fw-bold">Agendar Cita</button>
    </div>
    <div class="social-icons">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
    </div>
    <div class="map-container">
      <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.6355425402266!2d-99.15251298509487!3d19.390340586907302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff35862b8d1d%3A0x29c3bbf2bf1b2d2c!2sGoogle%20Mexico!5e0!3m2!1sen!2smx!4v1609500339831!5m2!1sen!2smx"
          width="100%"
          height="300"
          style="border:0;"
          allowfullscreen=""
          loading="lazy">
      </iframe>
    </div>
  </div>
</div>


@endsection
