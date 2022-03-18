<x-layout>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row mt-5">
            <h1 class="mt-5 text-center fw-bold">Login</h1>
            <div class="col">
                <form action="{{ route('login') }}">
                    <div class="mb-3 mt-3 text-center">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3 text-center">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <p class="text-center mt-4">
                        <button type="submit" class="btn btn-dark rounded-pill fs-4">Submit</button>
                    </p>
                </form>
            </div>
        </div>
    </div>

</x-layout>
