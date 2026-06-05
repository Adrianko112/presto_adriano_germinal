<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-warning" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link active" href="{{ route('homepage') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('article.index') }}">Tutti gli Annunci</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorie
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark shadow border-secondary">
                        @foreach ($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize hover-warning"
                                    href="{{ route('byCategory', $category) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                            @if (!$loop->last)
                                <li>
                                    <hr class="dropdown-divider border-secondary">
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto align-items-center">
                {{-- 1. UTENTE AUTENTICATO (Loggato) --}}
                @auth
                    <li class="nav-item me-3">
                        <a class="btn btn-warning text-dark fw-bold px-3" href="{{ route('create.article') }}">Inserisci
                            Annuncio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white fw-semibold" href="#" id="userDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Ciao, {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="userDropdown">
                            <li><a class="dropdown-menu-item dropdown-item" href="#">Il mio Profilo</a></li>
                            <li><a class="dropdown-menu-item dropdown-item" href="#">I miei Annunci</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
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
                <!-- zona del revisore -->
                @auth
                    @if (Auth::user()->is_revisor)
                        <li class="nav-item me-2 d-flex align-items-center">
                            <a class="btn btn-outline-warning btn-sm fw-bold px-3 position-relative"
                                href="{{ route('revisor.index') }}">
                                <i class="fas fa-user-shield me-1"></i>Zona revisore
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger shadow">
                                    {{ App\Models\Article::toBeRevisionedCount() }}
                                    <span class="visually-hidden">articoli da revisionare</span>
                                </span>

                            </a>
                        </li>
                    @endif
                @endauth

                {{-- 2. UTENTE OSPITE (Non Loggato) --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link me-2" href="{{ route('login') }}">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-warning fw-bold px-3" href="{{ route('register') }}">Registrati</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>