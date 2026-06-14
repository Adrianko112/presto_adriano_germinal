<x-layout>
    <div class="container">
        
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-4 text-white">
                    Dettaglio dell'articolo: <span class="text-warning fw-bold">{{ $article->title }}</span>
                </h1>
            </div>
        </div>

        <div class="row height-custom justify-content-center align-items-center py-5">
            
            <div class="col-12 col-md-6 mb-3">
                @if ($article->images->count() > 0)
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            
                            @foreach ($article->images as $key => $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow"
                                        alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}">
                                </div>
                            @endforeach

                        </div>

                        @if ($article->images->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif

                    </div>
                @else
                    <img src="https://picsum.photos/300" alt="Nessuna foto inserita dall'utente">
                @endif
            </div>

            <div class="col-12 col-md-6 mb-3 height-custom text-center text-md-start text-white">
                <div class="bg-dark bg-opacity-50 p-4 rounded-4 shadow border border-secondary d-flex flex-column justify-content-center h-75">
                    
                    <h2 class="display-5 mb-3">
                        <span class="fw-bold text-warning">Titolo:</span> {{ $article->title }}
                    </h2>
                    
                    <h4 class="fw-bold mb-3 text-success">
                        Prezzo: {{ $article->price }} €
                    </h4>
                    
                    <hr class="border-secondary">
                    
                    <h5 class="text-warning fw-semibold mt-2">Descrizione:</h5>
                    <p class="fs-5 text-white-50 leading-relaxed">
                        {{ $article->description }}
                    </p>

                </div>
            </div>

        </div>
    </div>
</x-layout>