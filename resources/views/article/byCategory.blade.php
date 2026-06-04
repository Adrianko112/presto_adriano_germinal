<x-layout>
    <div class="container">
        
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2 text-white">
                    Articoli della categoria 
                    <span class="fst-italic fw-bold text-warning text-capitalize">
                        {{ $category->name }}
                    </span>
                </h1>
            </div>
        </div>

        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12 text-center">
                    <div class="bg-dark bg-opacity-50 p-5 rounded-4 shadow border border-secondary my-3">
                        <h3 class="text-white-50">
                            Non sono ancora stati creati articoli per questa categoria!
                        </h3>
                        
                        {{-- Se l'utente è loggato, mostra il tasto rapido di pubblicazione --}}
                        @auth
                            <a class="btn btn-warning btn-lg fw-bold text-dark mt-4 px-4 shadow-sm" href="{{ route('create.article') }}">
                                <i class="fas fa-plus me-2"></i>Pubblica un articolo
                            </a>
                        @endauth
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</x-layout>