<x-layout>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <h1>Inserisci la tua Birreria</h1>
            </div>
        </div>



        <div class="row justify-content-center ">

            <div class="col-12 col-md-4 inner">
                <form method="POST" action="{{ route('brewery.store') }}" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Nome Birreria</label>
                        <input name="name" type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Descrizione Birreria</label>
                        <textarea name="description" id="" cols="30" rows="10" placeholder="scrivi qui..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label">Seleziona le tue Birre </label>
                        <select name="beer[]" multiple>

                            @foreach ($beers as $beer)
                            <option value="{{$beer->id}}">{{$beer->name}}</option>
                                
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci una foto</label>
                        <input name="img" type="file" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary cardH mb-3">Crea</button>
                </form>
            </div>
        </div>

    </div>





















</x-layout>
