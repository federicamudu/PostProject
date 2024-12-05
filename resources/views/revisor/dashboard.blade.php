<x-layout>
    <div class="container p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">Bentornato, Revisore {{ Auth::user()->name }}</h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-message">{{session('message')}}</div>
    @endif
    <div class="container">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articoli da revisionare</h2>
                    <x-articles-table :articles="$unrevisionedArticles"></x-articles-table>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articoli pubblicati</h2>
                    <x-articles-table :articles="$acceptedArticles"></x-articles-table>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Articoli respinti</h2>
                    <x-articles-table :articles="$rejectedArticles"></x-articles-table>
                </div>
            </div>
        </div>
    </div>
</x-layout>