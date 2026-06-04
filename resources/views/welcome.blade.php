<x-layout>

<div class="container-fluid p-0 mt-n4"> {{-- container-fluid p-0 per eliminare i margini e i pad esterni --}}
    
    <div class="position-relative d-flex align-items-center justify-content-center text-center welcome" 
         >
        
        <div class="container text-white">
            <h1 class="display-1 fw-bold text-uppercase mb-3">
                Benvenuto su <span class="text-warning">Presto.it</span>
            </h1>
            <p class="lead fs-3 mb-4 text-white-50">
                Il posto più veloce per comprare e vendere usato vicino a te.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <a href="#" class="btn btn-warning btn-lg px-4 gap-3 fw-bold text-dark">Esplora Annunci</a>
                <a href="{{ route('create.article') }}" class="btn btn-outline-light btn-lg px-4">Vendi Ora</a>
            </div>
        </div>

    </div>

</div>




</x-layout>