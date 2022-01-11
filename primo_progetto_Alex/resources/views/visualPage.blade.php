
<x-layout>



 <a href="{{route('articoli')}}" class="button1"><i class="fas fa-arrow-left fa-2x"></i></a>
 

    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <h1 class="text-center">{{$visualPage['nome']}}</h1>
                <div class="m-5">{{ $visualPage['articolo']}}</div>
            </div>
        </div>
    </div>


 </x-layout>





 