<x-layout>
    <div class="container p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1">
                    The Post
                </h1>
                @if (session('message'))
                    {{ session('message') }}
                @endif
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
                <x-card :article="$article"></x-card>
            @endforeach
        </div>
    </div>
</x-layout>