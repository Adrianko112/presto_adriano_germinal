<x-layout>

<div class="container ">
    <div class="row justify-content-center align-items-center card-login" >
        <div class="col-12 col-md-7 col-lg-6">
            
            <div class="card shadow border-0 rounded-3 p-4 bg-white">
                <div class="card-body">
                    
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-dark">Crea il tuo account su <span class="text-warning">Presto.it</span></h2>
                        <p class="text-muted small">Inizia subito a pubblicare e gestire i tuoi annunci</p>
                    </div>

                    <form action="{{ route('register') }}" method="POST">
                        @csrf 

                        <div class="form-floating mb-3">
                            <input type="text" 
                                   class="form-control @error('name') is-invalid @enderror" 
                                   id="name" 
                                   name="name" 
                                   placeholder="Nome Completo" 
                                   value="{{ old('name') }}" 
                                   required 
                                   autofocus>
                            <label for="name">Nome Completo</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   placeholder="nome@esempio.com" 
                                   value="{{ old('email') }}" 
                                   required>
                            <label for="email">Indirizzo Email</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   id="password" 
                                   name="password" 
                                   placeholder="Password" 
                                   required>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-4">
                            <input type="password" 
                                   class="form-control" 
                                   id="password_confirmation" 
                                   name="password_confirmation" 
                                   placeholder="Conferma Password" 
                                   required>
                            <label for="password_confirmation">Conferma Password</label>
                          
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-warning btn-lg fw-bold text-dark shadow-sm">
                                Registrati
                            </button>
                        </div>

                        <div class="text-center mt-4 small">
                            <span class="text-muted">Hai già un account?</span>
                            <a href="{{ route('login') }}" class="text-warning text-decoration-none fw-semibold ms-1">Accedi</a>
                        </div>

                    </form>

                </div>
            </div> 

        </div>
    </div>
</div>




</x-layout>