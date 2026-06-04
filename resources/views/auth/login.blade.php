<x-layout>




<div class="container ">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-lg-5">
            
            <div class="card shadow border-0 rounded-3 p-4 bg-white">
                <div class="card-body">
                    
                    <div class="text-center mb-4">
                        <h2 class="fw-bold text-dark">Accedi a <span class="text-warning">Presto.it</span></h2>
                        <p class="text-muted small">Inserisci le tue credenziali per gestire i tuoi annunci</p>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger p-2 small" role="alert">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf 

                        <div class="form-floating mb-3">
                            <input type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   id="email" 
                                   name="email" 
                                   placeholder="nome@esempio.com" 
                                   value="{{ old('email') }}" 
                                   required 
                                   autofocus>
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

                    

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-warning btn-lg fw-bold text-dark shadow-sm">
                                Accedi
                            </button>
                        </div>

                        <div class="text-center mt-4 small">
                            <span class="text-muted">Non hai ancora un account?</span>
                            <a href="{{ route('register') }}" class="text-warning text-decoration-none fw-semibold ms-1">Registrati</a>
                        </div>

                    </form>

                </div>
            </div> {{-- Fine Card --}}

        </div>
    </div>
</div>










</x-layout>