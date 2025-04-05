<nav class="navbar navbar-expand-lg sticky-top bg-clr-p fnt-ssp" data-bs-theme="dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown"
            aria-expanded="false" href="#">
            {{auth()->user()->name}}
          </a>
          <ul class="dropdown-menu">
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

      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          {{-- Botón Usuarios --}}
        <li class="nav-item mx-5">
          <a class="nav-link" aria-current="page" href="{{route('users.index')}}">Users</a>
        </li>
          {{-- Botón Menús --}}
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{route('menus.index')}}">Menus</a>
        </li>
          {{-- Botón Recetas --}}
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{route('recipes.admin')}}">Recipes</a>
        </li>
          {{-- Botón Comentarios --}}
        <li class="nav-item mx-5">
          <a class="nav-link" href="{{route('comments.admin')}}">Comments</a>
        </li>
      </ul>

        {{-- Logo --}}
      <a class="navbar-brand" href="#">
        <img src="/imgs/assets/Logo.png" width="50" alt="Logo">
      </a>
    </div>
  </div>
</nav>
