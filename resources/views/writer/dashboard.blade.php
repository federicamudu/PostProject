<x-layout>
    <div class="container p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    Bentornato, Redattore {{ Auth::user()->name }}
                </h1>
            </div>
        </div>
    </div>
    @if (session('message'))
    <div class="alert alert-message">
        {{session('message')}}
    </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Articoli da revisione
                </h2>
                <x-writer-articles-table :articles="$unrevisionedArticles"></x-writer-articles-table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Articoli pubblicati
                </h2>
                <x-writer-articles-table :articles="$acceptedArticles"></x-writer-articles-table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Articoli respinti
                </h2>
                <x-writer-articles-table :articles="$rejectedArticles"></x-writer-articles-table>
            </div>
        </div>
    </div>
</x-layout>