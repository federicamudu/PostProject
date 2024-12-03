<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center pt-5">
            <div class="col-12 col-md-6">
                <form action="{{ route('register') }}" method="POST" class="rounded p-5 border border-black bg-body-tertiary">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="my-3 text-center pb-5">
                                <h2>Registrati</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name">
                                @error('name')
                                <div class="small fst-italic text-danger">{{ $message }}</di>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                    @error('email')
                                    <div class="small fst-italic text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password:</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                    @error('password')
                                    <div class="small fst-italic text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Conferma password:</label>
                                    <input type="password" class="form-control" id="password" name="password_confirmation">
                                    @error('password_confirmation')
                                    <div class="small fst-italic text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-dark">Registrati</button>
                                </div>
                                <div class="mt-2 text-center">
                                    <span>Sei già registrato?</span>
                                    <a class="text-secondary" href="{{route('login')}}">Clicca qui</a>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>