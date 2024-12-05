<div class="container g-0">
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary border-dark border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Post</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                    <li><a href="{{route('article.index')}}" aria-current="page" class="nav-link">Articoli</a></li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('article.create')}}">Aggiungi un articolo</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bentornato {{ Auth::user()->name }}!
                        </a>
                        <ul class="dropdown-menu">
                            @if (Auth::user()->is_admin)
                            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Dashboard Admin</a></li>
                            @endif
                            @if (Auth::user()->is_revisor)
                            <li><a class="dropdown-item" href="{{route('revisor.dashboard')}}">Dashboard Revisor</a></li>
                            @endif
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                            <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">@csrf</form>
                        </ul>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto ospite
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                        </ul>
                    </li>
                    @endguest
                </ul>
                <form class="d-flex" role="search" action="{{route('article.search')}}" method="GET">
                    <div class="input-group">
                        <input type="search" class="form-control" name="query" placeholder="Cerca qui..." aria-label="Search" aria-describedby="button-addon2">
                        <button class="btn btn-secondary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </nav>
</div>