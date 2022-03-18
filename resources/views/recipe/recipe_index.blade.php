<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-3">
        <div class="row mt-5">
            <h1 class="mt-5 text-center fw-bold">Le nostre ricette</h1>
            <div class="col">
                <p class="text-center">
                    @if (Auth::user())
                        <a href="{{ route('recipe_form') }}"><button class="btn btn-dark rounded-pill fs-4">Inserisci
                                una
                                nuova ricetta</button></a>
                    @else
                        <h3 class="text-center">Iscriviti per poter aggiungere nuove ricette!</h3>
                        <p class="text-center mb-5">
                            <a href="{{ route('register') }}" class="link"><button
                                    class="btn btn-dark fs-4 rounded-pill">Registrati subito! </button></a>
                        </p>
                    @endif
                </p>
                <div class="container min-vh-100">
                    <div class="row">
                        @foreach ($recipes as $recipe)
                            <div class="col">
                                <div class="card bg-dark text-white" style="width: 20rem; height: 40rem;">
                                    <img src="https://picsum.photos/200" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="text-center">{{ $recipe['title'] }}</h4>
                                        <p class="card-text">{{ $recipe['description'] }}</p>
                                        <p class="card-text">{{ $recipe['ingrediants'] }}</p>
                                        <p class="card-text">{{ $recipe['created_at'] }}</p>
                                        <p class="card-text">{{$recipe->user['name']}}</p>
{{-- @dd(Auth::user()->all()) --}}
                                        <p class="text-center">
                                            <a href="{{ route('recipe_details', compact('recipe')) }}"
                                                class="btn btn-warning fs-4 rounded-pill">Go somewhere</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
