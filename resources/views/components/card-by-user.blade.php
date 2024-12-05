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
                    @if ($article->category)
                    <p class="small text-muted">
                        Categoria:
                        <a href="{{route('article.byCategory', $article->category)}}" class="text-capitalize fw-bold text-muted">{{$article->category->name}}</a>
                    </p>
                    @else
                    <p class="small text-muted">Nessuna categoria</p>
                    @endif
                    <p class="small text-muted my-0">
                        @foreach ($article->tags as $tag)
                            #{{$tag->name}}
                        @endforeach
                    </p>
                </div>
                <div class="card-footer d-flex justify-content-between align-items-center">
                    <p>Redatto il {{$article->created_at->format('d/m/Y')}}</p>
                    <a href="{{route('article.show', $article)}}" class="btn btn-outline-secondary">Leggi articolo</a>
                </div>
            </div>
        </div>
    </div>
</div>