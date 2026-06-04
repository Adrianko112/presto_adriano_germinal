<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="https://picsum.photos/200" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h6 class="card-subtitle text-body-secondary mb-3">{{ $article->price }} €</h6>
        <p class="card-text">{{ $article->description }}</p>
        
      
        <div class="d-grid gap-2 mt-4">
            <a href="{{ route('article.show', $article) }}" class="btn btn-outline-warning fw-bold">
                <i class="fas fa-eye me-2"></i>Dettaglio
            </a>
            <a href="{{ route('byCategory', $article->category) }}" class="btn btn-outline-warning">
                Categoria: {{ $article->category->name }}
            </a>
        </div>
    </div>
</div>