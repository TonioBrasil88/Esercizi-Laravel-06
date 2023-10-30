<!-- $slot -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="{{ route('homepage') }}"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'homepage') active @endif" aria-current="page" href="{{ route('homepage') }}"><i class="fa-solid fa-house-user text-primary"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'movie.index') active @endif" aria-current="page" href="{{ route('movie.index') }}"><i class="fa-solid fa-video text"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'movie.create') active @endif" aria-current="page" href="{{ route('movie.create') }}"><i class="fa-solid fa-clapperboard text-warning"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about_us') }}"><i class="fa-solid fa-users text-success"></i></i></a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('where') }}"><i class="fa-solid fa-location-dot text-danger"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact_us') }}"><i class="fa-regular fa-paper-plane text-info"></i></a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
  </nav>
