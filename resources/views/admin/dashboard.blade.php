<x-layout>
    <div class="container p-5 bg-secondary-subtle text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display">
                    Bentornato, Amministratore {{ Auth::user()->name }}
                </h1>
            </div>
        </div>
    </div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Richieste per il ruolo di amministratore
                </h2>
                <x-requests-table :roleRequests="$adminRequest" role="amministratore"></x-requests-table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Richieste per il ruolo di revisore
                </h2>
                <x-requests-table :roleRequests="$revisorRequest" role="revisore"></x-requests-table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Richieste per il ruolo di redattore
                </h2>
                <x-requests-table :roleRequests="$writerRequest" role="redattore"></x-requests-table>
            </div>
        </div>
    </div>
    <hr>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Tutti i tags
                </h2>
                <x-metainfo-table :metainfos="$tags" metaType="tags"></x-metainfo-table>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <h2>
                        Tutte le categorie
                    </h2>
                    <form action="{{route('admin.storeCategory')}}" method="post" class="w-50 d-flex m-3">
                        @csrf
                        <input type="text" name="name" id="name" placeholder="Nuova categoria" class="form-control me-2">
                        <button type="submit" class="btn btn-outline-secondary">Inserisci</button>
                    </form>
                </div>
                <x-metainfo-table :metainfos="$categories" metaType="categorie"></x-metainfo-table>
            </div>
        </div>
    </div>
</x-layout>