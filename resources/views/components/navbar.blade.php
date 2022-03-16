<nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand fs-2 fw-bold" href="#">Ricettario.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fs-5" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  fs-5" href="#">Link</a>
                </li>
                <li class="nav-item dropdown fs-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="#">Primi</a></li>
                        <li><a class="dropdown-item text-white" href="#">Secondi</a></li>
                        <li><a class="dropdown-item text-white" href="#">Contorni</a></li>
                        <li><a class="dropdown-item text-white" href="#">Piatti Unici</a></li>
                        <li><a class="dropdown-item text-white" href="#">Dessert</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fs-5" href="{{route('login')}}">Accedi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active fs-5" href="{{route('register')}}">Registrati</a>
                </li>
               
                <li class="nav-item ">
                    <a class="nav-link fs-5" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2 rounded-pill mt-2 fs-5" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-warning rounded-pill fw-bold mt-2 fs-5" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>