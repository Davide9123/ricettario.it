<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-3">
        <div class="row mt-5">
            <h1 class="mt-5 text-center">Contattaci</h1>
            <div class="col">
                <form method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome e Cognome</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <label for="textarea">Inserisci il tuo messaggio</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                    <p class="text-center mt-4">
                        <button type="submit" class="btn btn-dark rounded-pill">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>
</x-layout>
