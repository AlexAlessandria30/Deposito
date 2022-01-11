<x-layout>



    <div class="container mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <h1>Inserisci il tuo articolo</h1>
            </div>
        </div>
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-4">

                <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inserisci titolo articolo</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="title">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci nome autore</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="author">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inseriscil'articolo</label>
                        <textarea name="body" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Carica immagine</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
