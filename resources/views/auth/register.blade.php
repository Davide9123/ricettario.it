<x-layout>
    <div class="container  d-flex justify-content-center align-items-center mt-5">
        <div class="row mt-5">
            <h1 class="mt-5 text-center fw-bold">Register</h1>
            <div class="col">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3 text-center">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3 text-center">
                        <label for="exampleInputEmail1" class="form-label">User</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="name">
                    </div>
                    <div class="mb-3 text-center">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div> 
                    <div class="mb-3 text-center">
                        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1"
                            name="password_confirmation">
                    </div>
                    <p class="text-center">
                        <button type="submit" class="btn btn-dark rounded-pill">Submit</button>
                </p>
                </form>
                <div class="col">
                </div>
            </div>
        </div>
    </div>
</x-layout>
