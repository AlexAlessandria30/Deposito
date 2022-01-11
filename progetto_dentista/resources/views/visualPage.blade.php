<x-layout>



    <a href="{{ route('Servizi') }}" class="buttonV"><i class="fas fa-arrow-left fa-2x m-4"></i></a>


    <div class="container m-5">
        <div class="row">
            <div class="col-12 col-md-5 ">
                <img src="{{ $visualPage['img'] }}" class="card-img-top img-fluid" alt="{{ $visualPage['nome'] }}">
            </div>
            <div class="col-12 col-md-5 ">
                <h1 class="text-center">{{ $visualPage['nome'] }}</h1>
                <div class="m-5">{{ $visualPage['operazione'] }}</div>
            </div>
            <div class="col-12 col-md-2 remove">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Per fissare un appuntamento
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse "
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p>Visita la nostra newsletter per saperne di più</p>

                
                                <button class="btn text-uppercase button1 " >
                                    <a class="nav-link " href="{{ route('home') }}">Clicca qui</a>
                                </button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</x-layout>
