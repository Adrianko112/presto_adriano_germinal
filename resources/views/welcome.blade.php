<x-layout>
  
   <div class="container-fluid p-0 ">
    <div class="d-flex align-items-center justify-content-center text-center py-5 position-relative overflow-hidden custom-bg">
        <div class="container text-white">
            
            <!-- messaggio di errore zona revisori -->
            @if (session()->has('errorMessage'))
                <div class="d-flex justify-content-center mb-4">
                    <div class="alert alert-danger text-center shadow rounded w-50">
                        <i class="fas fa-exclamation-triangle me-2"></i>{{ session('errorMessage') }}
                    </div>
                </div>
            @endif
            <!-- messaggio di successo email revisori -->
            @if (session()->has('message'))
    <div class="alert alert-success text-center shadow rounded w-50">
        {{ session('message') }}
    </div>
@endif

            
            <h1 class="display-2 fw-bold text-uppercase mb-2">  
                {{ __('ui.benvenutoSu') }} <span class="text-warning">Presto.it</span>
            </h1>
            
            <p class="lead fs-4 text-white-50 mb-0">
                {{ __('ui.sottoTitolo') }}
            </p>
        </div>
    </div>
</div>

    <div class="container mt-5">
        <div class="row ">
            <div class="col-12">
                <h2 class="fw-bold text-uppercase text-white border-start border-warning border-4 ps-3">
                    {{ __('ui.UltimiAnnunci') }}
                </h2>
            </div>
        </div>

        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
             
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5 bg-dark bg-opacity-50 rounded-4 border border-secondary p-4 shadow">
                        <i class="fas fa-boxes text-warning display-4 mb-3"></i>
                        <h3 class="text-white-50 fw-semibold">
                            Non sono ancora stati creati articoli
                        </h3>
                        <p class="text-white small mb-0 mt-2">Sii il primo a pubblicarne uno! Registrati e crea un articolo.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>

</x-layout>