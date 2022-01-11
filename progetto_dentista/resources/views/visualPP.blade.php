<x-layout>

    <a href="{{ route('noi') }}" class="buttonV"><i class="fas fa-arrow-left fa-2x m-4"></i></a>


    <div class="container m-5">
        <div class="row ">
            <div class="col-12 col-md-5 ">
                <img src="{{ $visualPP['img'] }}" class="card-img-top img-fluid" alt="{{ $visualPP['nome'] }}">
            </div>
            <div class="col-12 col-md-5 ">
                <h1 class="text-center">{{ $visualPP['nome'] }} {{ $visualPP['cognome'] }}</h1>
                <div class="m-5">{{ $visualPP['presentazione'] }}</div>
            </div>
        </div>
    </div>


</x-layout>
