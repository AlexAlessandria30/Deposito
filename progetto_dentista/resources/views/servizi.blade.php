<x-layout>



    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="justify-content-center text-center mt-4 mb-5">I nostri Servizi</h1>
            </div>
        </div>
        <div class="row">

            @foreach ($servizi as $servizio)

                <div class="col-12 col-md-6 mb-3 card">

                    <div class="card" style="width: 18rem;">

                        <div class="card-body cardS card3 text-center">
                            <img src="{{$servizio['img']}}" class="card-img-top" alt="{{$servizio['nome']}}">
                            <h5 class="card-title">{{ $servizio['nome'] }}</h5>
                            <p class="card-text">{{ $servizio['operazione'] }}</p>
                            
                            <a href="{{ route('visuale', ['title' => $servizio['nome']]) }} "
                                class="btn btn-primary">Scopri di più</a>
                          
                        </div>

                    </div>
                </div>

            @endforeach

        </div>

    </div>








</x-layout>
