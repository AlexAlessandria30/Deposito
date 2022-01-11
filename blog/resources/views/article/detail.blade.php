<x-layout>



    <div class="container">
        <div class="row justify-content-center">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-12 col-md-6">
                <h1>{{ $article->title }}</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-md-2">
                
                    <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="{{ $article->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->author }}</h5>

                        <a href="{{ route('homepage') }}" class="btn btn-primary">torna alla homepage</a>
                    </div>
                
            </div>

            <div class="col-12 col-md-6 mx-5">
                <p>{{ $article->body }}</p>
            </div>
        </div>



    </div>








</x-layout>
