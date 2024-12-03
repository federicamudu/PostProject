<x-layout>
    <div class="container p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-capitalize">
                    Articoli di {{ $user->name }}
                </h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
                <x-card-by-user :article="$article"></x-card-by-user>
            @endforeach
        </div>
    </div>
</x-layout>