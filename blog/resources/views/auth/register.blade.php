<x-layout>



    <div class="container">
        <div class="row justify-content-center text-center m-5">
            <div class="col-12 col-md-6">
                <h1>Registrati<h1>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-12 col-md-4">
                <form method="POST" action="{{route('register')}}">
                 
                    @csrf
                
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Nome e Cognome </label>
                        <input name="name" type="text" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci E-MAIL</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci Password</label>
                        <input name="password" type="password" name="password" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Conferma Password</label>
                        <input  name="password_confirmation" type="password" name="password" class="form-control" >
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>




</x-layout>
