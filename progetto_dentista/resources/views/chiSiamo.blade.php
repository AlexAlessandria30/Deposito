<x-layout>


    <h1 class="text-center m-5">La Nostra Storia</h1>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 text-center">
                <h1> Origini</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo illo quibusdam placeat distinctio magnam
                    modi dignissimos, maxime id tempore quisquam? Nulla omnis quas consectetur. Accusamus assumenda
                    excepturi molestias illum nemo.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ex quia eos, voluptatum saepe
                    consequuntur blanditiis? Perspiciatis molestias delectus itaque repellat, officiis ex, earum quas
                    esse nesciunt iure rerum nam.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ex quia eos, voluptatum saepe
                        consequuntur blanditiis? Perspiciatis molestias delectus itaque repellat, officiis ex, earum quas
                        esse nesciunt iure rerum nam.</p>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ex quia eos, voluptatum saepe
                            consequuntur blanditiis? Perspiciatis molestias delectus itaque repellat, officiis ex, earum quas
                            esse nesciunt iure rerum nam.</p>
            </div>
            <div class="col-12 col-md-6">

                <img src="/img/imgd.jpg" alt="" class="img-fluid">

            </div>
        </div>

        <div class="row">
            <h1 class="text-center mt-5">I nostri dentisti</h1>

            @foreach ($chiSiamo as $dottori)

                <div class="col-12 col-md-4 mb-3 text-center card">

                    <div class="card" style="width: 18rem;">
                        <div class="card-body card2">
                            <img src="{{$dottori['img']}}" class="card-img-top" alt="{{$dottori['nome']}}">
                            <h5 class="card-title">{{$dottori['nome']}} {{$dottori['cognome']}}</h5>
                            <p class="card-text"> eta {{$dottori['eta']}}</p>
                            <a href="{{ route('visualPP', ['title' => $dottori['nome']]) }} "
                                class="btn btn-primary">Scopri di più</a>
                           
                        </div>
                    </div>

                </div>

            @endforeach
        </div>
    </div>



   </x-layout>