<x-layout>



    <div class="container mt-5">
        <div class="row justify-content-center mt-5">

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="col-12 col-md-6 m-5">
                <h1>{{ $article->title }}</h1>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-md-5">

                <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="{{$article->title}}">

                


            </div>

            <div class="col-12 col-md-6 mx-6">
                <p>{{ $article->body }}</p>
                <h5 class="card-title">{{ $article->user->name}}</h5>
            </div>

            <div class="col-12 col-md-1">

                <a href="{{ route('homepage') }}" class="btn btn-primary mb-1">  <i class="fas fa-home"></a>

                @if (Auth::id()=== $article->user->id) 
                    <form method="POST" action="{{route('article.delete', compact('article'))}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mb-1">  <i class="fas fa-trash"> </button>
                    </form>

                    <a href="{{ route('article.edit',compact('article')) }}" class="btn btn-success"
                        class="mb-1">  <i class="fas fa-edit"></a>

                @endif

                

            </div>
            
        </div>



    </div>

    @if (Auth::id()=== $article->user->id) 
    <form method="POST" action="{{route('article.delete', compact('article'))}}">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger mb-1">  <i class="fas fa-trash"> </button>
    </form>
@endif

      




</x-layout>
