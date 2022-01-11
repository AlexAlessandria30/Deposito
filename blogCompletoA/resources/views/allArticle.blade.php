<x-layout>
    <div class="container">

        <div class="row mt-5">
            <div class="col-12 mt-5">
             @auth
             <h1 class="mt-5 text-center">{{Auth::user()->name}}</h1>
             @endauth   
                <h2 class="mb-5 text-center">Ecco tutti i nostri articoli</h2>
            </div>
        </div>

        <div class="row ">

            @foreach ($articles as $article)
                <div class="col-12 col-md-4 mb-5 card-home ">
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
