<x-layout>

    <header class="container-fluid colore" id="header">
        <div class="row">

            <h1 class="text-center testo-principale">Dentista Amico</h1>
            <p class='text-center testo-principale3'>Il primo centro dentistico d'Europa</p>

        </div>
    </header>

    <section class="container-fluid bg-light-gray">
        <div class="container info-section">
            <div class="row">


                <div class="col-12 col-md-6 mb-3">
                    <div class="bg-white text-center py-5 px-3 rounded shadow">
                        <i class="fas fa-tooth display-1 tc-linear"></i>
                        <h3 class="fs-6 my-4">Servizi</h3>
                        <p class="tc-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus ad voluptatem
                            voluptatibus, quod possimus quo laborum tempore atque at in eum sed vel soluta ipsum
                            adipisci quas? Error, possimus?
                        </p>
                        <button class="btn text-uppercase button1 ">
                            <a class="nav-link " href={{ route('Servizi') }}>Scopri di più</a>
                        </button>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="bg-white text-center py-5 px-3 rounded shadow">
                        <i class="fas fa-users display-1 tc-linear"></i>
                        <h3 class="fs-6 my-4">Chi Siamo</h3>
                        <p class="tc-gray">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident doloribus ad voluptatem
                            voluptatibus, quod possimus quo laborum tempore atque at in eum sed vel soluta ipsum
                            adipisci quas? Error, possimus?
                        </p>
                        <button class="btn text-uppercase button1 " >
                            <a class="nav-link " href="{{ route('noi') }}">Scopri di più</a>
                        </button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    {{-- form --}}

    <div class="container mt-3 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1 class="text1 mb-4">Iscriviti alla Newsletter</h1>
            </div>


            {{-- messagio errore form --}}

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row justify-content-center ">
                <div class="col-12 col-md-6">

                    <form method="POST" action="{{ route('store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nome e Cognome</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="name"  value="{{old('name')}}">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{old('email')}}">
                        </div>
                        <div class="mb-3 mes">
                            <label for="exampleInputPassword1" class="form-label"></label>
                            <textarea name="message" id="" cols="53" rows="5" placeholder="scrivi qui">{{old('message')}}</textarea>
                        </div>

                        <button type="submit" class="btn button1">Registrati</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
