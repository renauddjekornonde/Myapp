<nav class="navbar navbar-expand-lg bg-secondary">
    <div class="container">
      <a class="navbar-brand text-light fw-bold" href="#">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class=" text-light fw-bold nav-link @if (Request::route()->getName()=='app_home') active @endif" aria-current="page" href="{{route('app_home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="text-light fw-bold nav-link @if (Request::route()->getName()=='app_about') active @endif" aria-current="page" href="{{route('app_about')}}">About</a>
          </li>
        </ul>
        <form class="d-flex me-auto fw-bold" role="search">
          <input class="form-control me-2 fw-bold" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark text-light fw-bold" type="submit">Search</button>
        </form>
      </div>


      <div class="btn-group">
        @guest
        <button class="btn btn-secondary dropdown-toggle fw-bold " type="button" data-bs-toggle="dropdown" aria-expanded="false">
          My account
        </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item fw-bold" href="{{route('login')}}">Login</a></li>
                <li><a class="dropdown-item fw-bold" href="{{route('register')}}">Register</a></li>
            </ul>
        @endguest

        @auth
        {{-- <button class="btn btn-secondary dropdown-toggle fw-bold " type="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{Auth::user()->name}}
          </button> --}}
          <img src="{{asset('assets/img/user.jpeg')}}" alt="Image de l'utilisateur" width="40" height="40" class="rounded-circle dropdown-toggle rounded-sm me-5" style="border: 2px solid #333;" data-bs-toggle="dropdown" aria-expanded="false" type="button">

              <ul class="dropdown-menu py-0 bg-secondary mt-2">
                  <li><a class="dropdown-item fw-bold text-light" href="{{route('app_logout')}}">Logout</a></li>
              </ul>
        @endauth

      </div>

    </div>
  </nav>
