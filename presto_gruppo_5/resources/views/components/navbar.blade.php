<nav class="navbar navbar-expand-lg navbar-dark nav-color fixed-top presto-navbar font-secondary">
    <div class="container-fluid">
        <a class="navbar-brand mx-5 text-color-nav" href="{{ route('homepage') }}">
            <img src="/image/presto.it.png" class="logo-nav" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-5">
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-color-nav d-2 fs-4"
                            href="{{ route('login') }}"><b>{{ __('ui.enter') }}</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-color-nav fs-4"
                            href="{{ route('register') }}"><b>{{ __('ui.registration') }}</b></a>
                    </li>

                @endguest





                <li class="nav-item">
                    <a class="nav-link text-color-nav fs-4" href="{{ route('announcement') }}">
                        <b>{{ __('ui.header') }}</b></a>
                </li>


                @auth


                    @if (Auth::user()->is_revisor)
                        <li class="nav-item">
                            <a class="nav-link text-color-nav fs-4 cont-rev mt-2 py-0 mx-2"
                                href="{{ route('rev.revisor') }}">
                                <b>{{ __('ui.revisor') }}</b>

                                <span class="badge badge-pill badge-warning contatore py-0">
                                    {{ App\Models\Article::ToBeRevisionedCount() }}
                                </span>


                            </a>
                        </li>

                    @endif

                    <form method="GET" action="{{ route('article.search') }}" class="d-flex p-2 mb-0">
                        <input name="q" class="form-control my-1 py-1 pe-5 me-1" type="search"
                            placeholder="{{ __('ui.search') }}" aria-label="Search">
                        <button class="btn {{-- btn-outline-success --}} my-1 py-1" type="submit">{{ __('ui.search') }}</button>
                    </form>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-color-nav fs-4" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <b>{{ __('ui.greeting') }} {{ Auth::user()->name }}</b>
                        </a>

                        <ul class="dropdown-menu dropdown-bg" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item text-color-nav dropdown-bg fs-4"
                                    href="{{ route('myarticles') }} "><b>{{ __('ui.button99') }}</b></a>

                            </li>
                            <li><a href="{{ route('article.create') }}"
                                    class="dropdown-item text-color-nav dropdown-bg fs-4"><b>{{ __('ui.button2') }}</b></a>
                            </li>

                            <li><a class="dropdown-item text-color-nav dropdown-bg fs-4" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document. 
                                                                            getElementById('form-logout').submit()"><b>Logout</b></a>
                            </li>
                            <form action="{{ route('logout') }}" method="post" id="form-logout">
                                @csrf
                            </form>

                        </ul>
                    </li>
                @endauth


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-color-nav fs-4" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-language mt-1"></i>

                    </a>
                    <ul class="dropdown-menu dropdown-bg justify-content-center" aria-labelledby="navbarDropdown">
                        <li class="nav-item">
                            <form action="{{ route('locale', 'ita') }}" method='POST'>
                                @csrf
                                <button type="submit" class="nav-link"
                                    style="background-color:transparent; border:none;">
                                    <span><img src="/image/italy.png" alt="" width="25" height="25"></span>
                                    <span class="ms-1"><b>Italiano</b></span>
                                </button>
                            </form>

                        </li>
                        <li>

                            <form action="{{ route('locale', 'en') }}" method='POST'>
                                @csrf
                                <button type="submit" class="nav-link"
                                    style="background-color:transparent; border:none;">
                                    <span><img src="/image/united-kingdom.png" alt="" width="25" height="25"></span>
                                    <span class="ms-1"><b>English</b></span> 
                                    
                                    
                                    
                                </button>
                            </form>

                        </li>
                        <li>
                            <form action="{{ route('locale', 'es') }}" method='POST'>
                                @csrf
                                <button type="submit" class="nav-link"
                                    style="background-color:transparent; border:none;">
                                    <span><img src="/image/spain.png" alt="" width="25" height="25"></span>
                                    <span class="ms-1"><b>Espanol</b></span>
                                </button>
                            </form>

                        </li>
                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>
