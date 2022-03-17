<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row mt-5">
            <h1 class="text-center fw-bold mt-5">Inserisci una nuova ricetta</h1>
            <div class="col">
                <form method="POST" action="">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Inserisci il titolo</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Procedimento</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputText" class="form-label">Ingredienti</label>
                        <input type="text" class="form-control" name="ingrediants">
                    </div>
                    <p class="text-center">
                        <button type="submit" class="btn btn-dark rounded-pill">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-layout>
