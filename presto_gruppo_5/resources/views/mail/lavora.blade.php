<x-layout>
    <x-slot name='title'>
        lavora con noi
    </x-slot>
    <x-header />

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="font-primary h1-relative"> {{ __('ui.lavora') }}</h1>
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
           
            <form class="col-12 col-md-6" method="POST" action="{{ route('mail.storework') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{ __('ui.email') }}</label>
                    <input name="email" value="{{ old('email') }}" ype="email" class="form-control"
                        id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputName" class="form-label">{{ __('ui.name') }}</label>
                    <input name="name" value="{{ old('name') }}" type="Text" class="form-control"
                        id="exampleInputName">
                </div>
                <div class="mb-3">
                    <textarea name="message" value="{{ old('message') }}" type=" Text" class="form-control"
                        id="exampleInputName" aria-describedby="emailHelp" placeholder="scrivi qualcosa"></textarea>
                    <div id="emailHelp" class="form-text">{{ __('ui.datas') }}</div>
                </div>
                <button type="submit" class="btn btn-primary">{{__('ui.button4')}}</button>
            </form>
        </div>
    </div>
    
</x-layout>
