<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top blog-navbar square-navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">TechBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              @guest
                   <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('allArticle')}}">I nostri
                        Articolo</a>
                </li>
              @endguest
               
                @auth
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('article.create')}}">Inserisci
                            Articolo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('allArticle')}}">I nostri
                            Articolo</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Benvenuto {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
                            document.getElementById('form-logout').submit();"
                                   >Logout</a></li>
                            
                            <form method="POST" action="{{route('logout')}}" id="form-logout">
                                @csrf
                            </form>


                            <li><a class="dropdown-item" href="{{route('article.user')}} ">I miei articoli</a></li>
                            

                            <li><a class="dropdown-item" href="{{route('user.delete',['user'=> Auth::user()])}}"  onclick="event.preventDefault();
                                document.getElementById('form-delete').submit();" >Elimina Profilo</a>
                            </li>
                            <form method="POST" action="{{route('user.delete',['user'=> Auth::user()])}}" id="form-delete" >
                            @csrf 
                            @method('delete')
                            </form>

                        </ul>
                    </li>
                @endauth


            </ul>

        </div>
    </div>
</nav>
