<header class="container">
    <div class="row my-3 ">

      <div class="col-auto">
        <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo-dc" class="logo">
      </div>

        <ul class="nav justify-content-center col">
            <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}"
             href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Route::currentRouteName() == 'comics.index' ? 'active' : '' }}"
            href="{{ route('comics.index') }}">Comics</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Movies</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">TV</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Games</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Collectibles</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Videos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Fans</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Shop</a>
            </li>
        </ul>

        <div class="col-auto">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search"></i>
            </form>
        </div>

    </div>

</header>

<img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron" class="jumbo">
