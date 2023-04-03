<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @auth
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('comuni.create') }}">Aggiungi Comune</a>
              @endauth
          </ul>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
             @guest
              <li class="nav-item">
                  <a href="{{ route('login') }}" class="nav-link">Login</a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('register') }}" class="nav-link">Register</a>
              </li>
              @endguest
             @auth
              <li class="nav-item">
                  <a class="nav-link">{{ Auth::user()->name }}</a>
              </li>
              <li class="nav-item">
                  <form action="{{ route('logout') }}" method="post">
                      @csrf
                      <button class="btn btn-danger">Logout</button>
                  </form>
              </li>
             @endauth
          </ul>
      </div>
  </div>
</nav>
