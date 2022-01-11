<x-layout>



    <div class="container mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <h1 class="mt-5"> {{Auth::user()->name}} inserisci il tuo articolo</h1>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                 <ul>
                 @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                 @endforeach
                </ul>
             </div>
         @endif

        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-4">

                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Inserisci titolo articolo</label>
                        <input type="text" class="form-control" id="title" aria-describedby="title"
                            name="title">
                    </div>

                  

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inseriscil'articolo</label>
                        <textarea name="body" id="" cols="48" rows="5"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Carica immagine</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    
                    <button type="submit" class="btn button1">Publica</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
