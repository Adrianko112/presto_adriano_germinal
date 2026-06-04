<x-layout>
    <div class="container ">
        
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5 fw-bold text-dark text-uppercase">
                    Pubblica un <span class="text-warning">articolo</span>
                </h1>
                <p class="text-white">Compila il form sottostante per inserire il tuo annuncio su Presto.it</p>
            </div>
        </div>

        <div class="row justify-content-center align-items-center height-custom ">
            <div class="col-12 col-md-8 col-lg-6">
                
                <div class="card shadow border-0 rounded-3 p-4 bg-white">
                    <div class="card-body">
                        
                        <livewire:create-article-form />
                        
                    </div>
                </div>

            </div>
        </div>

    </div>
</x-layout>