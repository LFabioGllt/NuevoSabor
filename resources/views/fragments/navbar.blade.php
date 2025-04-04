<nav class="navbar navbar-expand-lg sticky-top bg-clr-p fnt-ssp" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @if (auth()->user() != null)
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
              aria-expanded="false" href="#">
              {{auth()->user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('recipes.user', auth()->user()->id)}}">
                My Recipes
              </a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="{{route('logout.handle')}}" method="POST">
                  @csrf
                  <a class="dropdown-item" href="{{route('logout.handle')}}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    Logout
                  </a>
                </form>
              </li>
            </ul>
          </li>
        </ul>
      @else
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">SignUp</a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="{{route('login')}}">SignIn</a>
          </li>
        </ul>
      @endif

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          {{-- Botón Inicio --}}
        <li class="nav-item mx-5">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
          {{-- Botón Menú --}}
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{route('recipes.index')}}">Menu</a>
        </li>
          {{-- Botón Foro --}}
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{route('comments.index')}}">Forum</a>
        </li>
          {{-- Botón Contacto --}}
        <li class="nav-item mx-5">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>

      {{-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> --}}

        {{-- Logo --}}
      <a class="navbar-brand" href="#">
        <img src="/imgs/assets/Logo.png" width="50" alt="Logo">
      </a>
    </div>
  </div>
</nav>
