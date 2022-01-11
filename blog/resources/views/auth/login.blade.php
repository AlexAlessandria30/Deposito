<x-layout>



    <div class="container">
        <div class="row text-center justyfy-content-center m-5">
            <div class="col-12.col.md-6">
                <h1>Accedi<h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 ">
                <form method="POST" action="{{route('login')}}">

                   @csrf
                
                 
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci E-MAIL</label>
                        <input type="email" class="form-control" id="exampleInputPassword1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Inserisci Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" >
                    </div>
                   

                 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


        </div>
    </div>




</x-layout>
