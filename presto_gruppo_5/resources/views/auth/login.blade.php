<x-layout>

    <x-slot name='title'>
        Login
    </x-slot>

    <x-header />

    <div class="container mb-5">
        <div class="row justify-content-center text-center mt-5">
            <div class="col-12 col-md-6">
                <h1 class="font-primary h1-relative">{{__('ui.login')}}</h1>
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
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mt-0">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">{{__('ui.pass')}}</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>

                    <button type="submit col-6" class="btn btn-primary">{{__('ui.enter')}}</button>


                </form>
            </div>
        </div>

    </div>



    <div class="container justify-content-center">

        <div class="row d-flex align-items-center">
            <div class="col-12 text-center">
                <div class="mb-3"><b>{{__('ui.oppure')}}</b></div>
                <a class="btn mb-5 " href="{{ route('register') }}">{{__('ui.registration')}}</a>
            </div>
        </div>
    </div>





</x-layout>
