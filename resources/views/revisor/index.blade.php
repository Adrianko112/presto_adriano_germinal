<x-layout>
    <div class="container-fluid pt-5">
        
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="rounded shadow bg-dark bg-opacity-75 text-white p-3 border border-secondary">
                    <h1 class="display-5 text-center pb-2 text-warning fw-bold mb-0">
                        <i class="fas fa-user-shield me-2"></i>Revisor Dashboard
                    </h1>
                </div>
            </div>
        </div>

        @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-warning text-center shadow rounded">
                    {{ session('message') }}
                </div>
            </div>
        @endif

        @if ($article_to_check)
            <div class="row justify-content-center pt-5">
                
                <div class="col-12 col-md-8">
                    <div class="row justify-content-center bg-dark bg-opacity-25 p-4 rounded-4 border border-secondary shadow mb-4">
                        
                        @if ($article_to_check->images->count())
                            @foreach ($article_to_check->images as $key => $image)
                                <div class="col-6 col-md-4 mb-4">
                                    <img src="{{ Storage::url($image->path) }}" class="img-fluid rounded shadow"
                                        alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                </div>
                            @endforeach
                        @else
                            @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="https://picsum.photos/300" alt="immagine segnaposto"
                                        class="img-fluid rounded shadow">
                                </div>
                            @endfor
                        @endif

                    </div>
                </div>

                <div class="col-12 col-md-4 ps-md-4 d-flex flex-column justify-content-between text-white">
                    <div class="bg-dark bg-opacity-50 p-4 rounded-4 shadow border border-secondary h-100 d-flex flex-column justify-content-between">
                        
                        <div>
                            <h1 class="display-4 fw-bold text-warning mb-3">{{ $article_to_check->title }}</h1>
                            <h3 class="text-white-50 fs-4 mb-2">
                                <i class="fas fa-user me-2 text-warning"></i>Autore: {{ $article_to_check->user->name }}
                            </h3>
                            <h4 class="text-success fw-bold fs-3 mb-2">
                                {{ $article_to_check->price }} €
                            </h4>
                            <h4 class="fst-italic text-white-50 fs-5 mb-4 border-bottom border-secondary pb-3">
                                <i class="fas fa-tags me-2 text-warning"></i>#{{ $article_to_check->category->name }}
                            </h4>
                            <h5 class="text-warning fw-semibold">Descrizione:</h5>
                            <p class="fs-6 text-white-50 leading-relaxed">
                                {{ $article_to_check->description }}
                            </p>
                        </div>

                        <div class="d-flex pb-4 justify-content-around mt-4">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST" class="me-2 w-50">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger py-2 w-100 fw-bold shadow-sm text-uppercase">
                                    <i class="fas fa-times me-2"></i>Rifiuta
                                </button>
                            </form>
                            
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST" class="ms-2 w-50">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success py-2 w-100 fw-bold shadow-sm text-uppercase">
                                    <i class="fas fa-check me-2"></i>Accetta
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        @else
            <div class="row justify-content-center align-items-center height-custom text-center py-5">
                <div class="col-12 col-md-6">
                    <div class="bg-dark bg-opacity-50 p-5 rounded-4 shadow border border-secondary my-5">
                        <i class="fas fa-check-circle text-success display-1 mb-4"></i>
                        <h1 class="fst-italic display-4 text-white mb-3">
                            Nessun articolo da revisionare
                        </h1>
                        <p class="text-white-50 mb-4">Ottimo lavoro! La coda di revisione è completamente vuota al momento.</p>
                        <a href="{{ route('homepage') }}" class="btn btn-warning btn-lg fw-bold text-dark px-4 shadow-sm">
                            <i class="fas fa-home me-2"></i>Torna all'homepage
                        </a>
                    </div>
                </div>
            </div>
        @endif

    </div>
</x-layout>