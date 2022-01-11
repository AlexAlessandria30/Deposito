<x-layout>

    <x-slot name='title'>
        Register
    </x-slot>
    <x-header />
    <div class="container align-items-center bg-register mt-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 register-position">
                <h1 class="font-primary h1-relative">{{ __('ui.reg') }}</h1>
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

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-4 register-position">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-color fs-5">{{ __('ui.name') }}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-color fs-5">{{ __('ui.email') }}</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1"
                            class="form-label text-color fs-5">{{ __('ui.pass') }}</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1"
                            class="form-label text-color fs-5">{{ __('ui.pass2') }}</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('ui.registration') }}</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
