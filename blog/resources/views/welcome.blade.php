<x-layout>



<div class="container">
    <div class="row justify-content-center text-center">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif  
    
        <div class="col-12 col-md-6 text-center mt-5">
            <h1>Benvenuti nell blog</h1>
        </div>
    </div>

    <div class="row  ">
        @foreach ($articles as $article)
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <a href="{{route('article.detail',compact('article'))}}" class="btn btn-primary">Mostra Altro</a>
                    </div>
                  </div>
            </div>
        @endforeach
        
    </div>
</div>








</x-layout>
