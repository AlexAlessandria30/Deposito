<x-layout>



    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="justify-content-center text-center mt-4 mb-5">I nostri Articoli</h1>
            </div>
        </div>
        <div class="row">

            @foreach ($Articol as $articolo)

                <div class="col-12 col-md-4 mb-3 card">

                    <div class="card" style="width: 18rem;">

                        <div class="card-body card2 card3 text-center">
                            <h5 class="card-title">{{ $articolo['nome'] }}</h5>
                            <p class="card-text">{{ $articolo['parla di'] }}</p>
                            <h5 class="card-title"> Scritto da {{ $articolo['scritto da'] }}</h5>
                            <a href="{{ route('visuale', ['title' => $articolo['nome']]) }} "
                                class="btn btn-primary">Scopri di più</a>
                            {{-- {{route('visuale'),['title' => $articolo['nome']]}}  le parentesi quello giusto è sopra --}}
                        </div>

                    </div>
                </div>

            @endforeach

        </div>

    </div>








</x-layout>
