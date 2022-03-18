<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-3 min-vh-100">
        <div class="row mt-5">
            <div class="col-12 mt-3">
                <h1 class="mt-3 fw-bold text-center">{{ $recipe->title }}</h1>
            </div>
            <div class="col-6">
                <h3 class="fw-bold">Ingredienti</h3>
                <p>{{ $recipe->ingrediants }}</p>
                <h3 class="fw-bold">Procedimento</h3>
                <p>{{ $recipe->description }}</p>
            </div>
            <div class="col-6">
                <img src="https://picsum.photos/200" alt="" class="src">
            </div>
        </div>
    </div>
    </div>

</x-layout>
