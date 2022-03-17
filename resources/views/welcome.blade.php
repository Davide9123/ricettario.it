<x-layout>
    <div class="container-fluid masthead text-white ">
        <div class="container">
            <div class="row">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="col-12">
                    <h1 class="fw-bold fs-1 text-center">Ricettario.it</h1>
                    <p class="fs-4 text-center">Idee semplici per cucinare piatti fantastici</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark">
        <h2 class="text-white py-4 text-center fs-2 fw-bold">Cosa vuoi cucinare?</h2>
    </div>
</x-layout>
