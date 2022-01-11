<x-layout>

    <div class="container-fluid" id="cover1">
        <div class="row justify-content-center text-center ">
            <div class="col-12 col-md-6">
                <h1>Benvenuto nella birreria {{ $brewery->name }}</h1>
            </div>
        </div>

        <div class="row justify-content-center mt-5 ">
            
            <div class="col-12 col-md-4 mb-3">

                <a href="{{ route('homepage') }}" class="btn btn-primary item1 cardH "><i class="fas fa-home"></i></a>

                @if (Auth::id() === $brewery->user->id)
                    <a href="{{ route('brewery.edit', compact('brewery')) }}" class="btn btn-warning mt-1 item1">
                        <i class="far fa-edit"></i></a>
                    <form method="POST" action="{{ route('brewery.delete', compact('brewery')) }}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger mt-1 item1"><i class="fas fa-trash"></i></button>
                    </form>
                @endif
                <img src="{{ Storage::url($brewery->img) }}" class="card-img-top mt-4" alt="{{ $brewery->name }}"
                width="400" height="300">
            </div>



            <div class="col-12 col-md-6 text-center">
             
                <p class="card-body">{{ $brewery->description }}</p>
            </div>

            <div class="col-12 col-md-2 justify-content-center ">
                <h6>Le nostre birre</h6>
                <ul>

                    @foreach ($brewery->beers as $beer)
                        <li>{{ $beer->name }}</li>
                    @endforeach

                </ul>

        
            </div>


        </div>
    </div>







</x-layout>
