<x-layout>

    <div class="container-fluid">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-12 col-md-6">
                <h1>Birreria amica</h1>
            </div>
        </div>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @if (session('destroy'))
        <div class="alert alert-danger">
            {{ session('destroy') }}
        </div>
    @endif
        
        <div class="row  mt-5 mb-5">

            @foreach ($breweries as $brewery)
                <div class="col-12 col-md-4 card-home" >
                    <div class="card rounded card-home1" style="width: 18rem;">
                        <img src="{{ Storage::url($brewery->img) }}" class="card-img-top" alt="{{ $brewery->name }}"
                            width="100px" height="200px">
                        <div class="card-body">
                            <h5 class="card-title">{{ $brewery->name }}</h5>
                            <h6>Creato da : {{$brewery->user->name}}</h6> <!--usiamo la funzione di relazione user-->
                            <h6>Creata il : {{$brewery->created_at->format('d/m/Y')}}</h6>
                            <a href="{{ route('brewery.detail', compact('brewery')) }}" class="btn btn-primary cardH">Scopri
                                di piu</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>







</x-layout>
