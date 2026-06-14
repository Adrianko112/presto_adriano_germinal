<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-warning" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('homepage') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('article.index') }}">{{__( 'ui.annunci' )}}</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__( 'ui.categorie' )}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark shadow border-secondary">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize hover-warning"
                                    href="{{ route('byCategory', $category) }}">
                                    {{__( "ui.$category->name" )}}
                                </a>
                            </li>
                            @if (!$loop->last)
                                <li><hr class="dropdown-divider border-secondary"></li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>

            <form class="d-flex me-2 mb-2 mb-lg-0" role="search" action="{{ route('article.search') }}" method="GET">
                <div class="input-group">
                    <input type="search" name="query" class="form-control" placeholder="{{__( 'ui.cerca' )}}" aria-label="search">
                    <button type="submit" class="input-group-text btn btn-outline-warning fw-bold" id="basic-addon2">
                        {{__( 'ui.cerca' )}}
                    </button>
                </div>
            </form>

            <ul class="navbar-nav align-items-lg-center">

                @auth
                    <li class="nav-item mb-2 mb-lg-0">
                        <a class="btn btn-warning text-dark fw-bold px-3" href="{{ route('create.article') }}">
                            {{__( 'ui.inserisci_annuncio' )}}
                        </a>
                    </li>
                @endauth

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user-circle me-1"></i>Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow border-secondary" aria-labelledby="userDropdown">
                            @if (Auth::user()->is_revisor)
                                <li><hr class="dropdown-divider border-secondary"></li>
                                <li>
                                    <a class="dropdown-item d-flex justify-content-between align-items-center" href="{{ route('revisor.index') }}">
                                        <span><i class="fas fa-user-shield me-2"></i>Zona revisore</span>
                                        <span class="badge rounded-pill bg-danger ms-2">
                                            {{ App\Models\Article::toBeRevisionedCount() }}
                                        </span>
                                    </a>
                                </li>
                            @endif

                            <li><hr class="dropdown-divider border-secondary"></li>

                            <li class="px-3 py-1">
                                <small class="text-muted text-uppercase">{{__( 'ui.lingua' )}}</small>
                            </li>
                            <li class="dropdown-item p-0 d-flex align-items-center"><x-_locale lang="it" /> Italiano</li>
                            <li class="dropdown-item p-0 d-flex align-items-center"><x-_locale lang="uk" /> English</li>
                            <li class="dropdown-item p-0 d-flex align-items-center"><x-_locale lang="es" /> Español</li>

                            <li><hr class="dropdown-divider border-secondary"></li>

                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-none" id="logout-form">
                                    @csrf
                                </form>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt me-2"></i>Esci
                                </a>
                            </li>
                        </ul>
                    </li>
                @endauth

                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{__( 'ui.accedi' )}}</a>
                    </li>
                    <li class="nav-item mb-2 mb-lg-0">
                        <a class="btn btn-outline-warning fw-bold px-3" href="{{ route('register') }}">{{__( 'ui.registrati' )}}</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-semibold text-capitalize" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-globe me-1 text-warning"></i> {{__( 'ui.lingua' )}}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end shadow border-secondary">
                            <li class="dropdown-item p-0"><x-_locale lang="it" />Italiano</li>
                            <li><hr class="dropdown-divider border-secondary"></li>
                            <li class="dropdown-item p-0"><x-_locale lang="uk" />English</li>
                            <li><hr class="dropdown-divider border-secondary"></li>
                            <li class="dropdown-item p-0"><x-_locale lang="es" />Español</li>
                        </ul>
                    </li>
                @endguest

            </ul>
        </div>
    </div>
</nav>