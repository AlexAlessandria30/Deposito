<nav class="navbar navbar-expand-lg navbar-light square-navbar ">
    <div class="container">
        <a class="navbar-brand text-uppercase  fw-bold" href="{{route('home')}}">Dentista Amico</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('noi')}}">Chi Siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('Servizi')}}">Servizi</a>
                    <li class="nav-item">
                        <div class="d-flex">
                            <a class="nav-link" href="#">
                                <div class="circular-link">
                                    <i class="fab fa-facebook-f"></i>
                                </div>
                            </a>
                            <a class="nav-link" href="#">
                                <div class="circular-link">
                                    <i class="fab fa-twitter"></i>
                                </div>
                            </a>
                        </div>
                    </li>
                </li>
            </ul>
        </div>
    </div>
</nav>