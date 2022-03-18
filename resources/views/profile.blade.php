<x-layout>

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col mt-5">
            <h1 class="mt-3 text-center fw-bold">Utente:{{Auth::user()->name}}</h1>
            <p class="fs-5 mt-3">MAIL:{{Auth::user()->email}}</p>
            <p class="fs-5">ISCRITTA DAL:{{Auth::user()->created_at}}</p>
            <h3 class="text-center fw-bold">Ricette aggiunte:</h3>
        </div>
    </div>
</div>

</x-layout>