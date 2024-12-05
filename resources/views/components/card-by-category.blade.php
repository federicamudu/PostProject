<div class="col-12 col-md-6">
    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{Storage::url($article->image)}}" class="img-fluid rounded-start imgCard" alt="Immagine dell'articolo {{$article->title}}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <p class="card-text">{{ $article->subtitle }}</p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <p>Redatto il {{$article->created_at->format('d/m/Y')}} <br> da <a href="{{route('article.byUser', $article->user)}}">{{ $article->user->name}}</a></p>
                    <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi articolo</a>
                </div>
            </div>
        </div>
    </div>
</div>