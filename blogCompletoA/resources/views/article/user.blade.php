<x-layout>

    <div class="container mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 text-center mt-5">
                <h1 class="mt-3 mb-5">I tuoi articoli {{Auth::user()->name}}</h1>
            </div>
        </div>
    
        <div class="row">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 card-home">
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($article->img)}}" width="50px" height="200px" class="card-img-top" alt="{{$article->title}}">
                        <div class="card-body">
                          <h5 class="card-title">{{$article->title}}</h5>
                          <a href="{{route('article.detail', compact('article'))}}" class="btn button1">Mostra Altro</a>
                        </div>
                      </div>
                </div>
            @endforeach
            
        </div>
        
    </div>
    
 </x-layout>
    