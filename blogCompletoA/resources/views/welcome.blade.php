<x-layout>



    <div class="container-fluid ">
        <div class="row justify-content-center text-center">



            <header class="container-fluid colore" id="header">
                <div class="row">

                    <h1 class="text-center testo-principale mt-5">TechBlog</h1>
                    <p class='text-center testo-principale2'>Community di tecnologia italiana</p>

                </div>
            </header>

        </div>
        <h2 class='text-center testo-principale3 m-5'>I nostri ultimi articoli</h2>



        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif


        <div class="row ">


            @foreach ($articles as $article)
                <div class="col-12 col-md-4  card-home ">
                    <div class="card " style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" width="50px" height="200px" class="card-img-top"
                            alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <a href="{{ route('article.detail', compact('article')) }}" class="btn button1">Mostra
                                Altro</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>


    </div>


</x-layout>
