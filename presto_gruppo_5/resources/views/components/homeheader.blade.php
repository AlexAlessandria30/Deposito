  
  
  <header class="container-fluid bg-header mustheadhome justify-content-center">
    <div class="alert-message">
        @if (session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        @if (session('access.denied.revisor.only'))
            <div class="alert alert-danger">
                {{ session('access.denied.revisor.only') }}
            </div>
        @endif
    </div>
        <div class="row text-center align-items-center">
            <div class="col-12 col-md-6 my-auto">
                <h1 class="mt-5 font-primary"><img class="musthead-logo img-fluid" src="/image/presto.it.png" alt=""></h1>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="mt-5 font-secondary display-3 musthead-title">{{ __('ui.welcome') }}</h2>
                <a href="{{ route('article.create') }}" class="btn">{{__('ui.button2')}}</a>
            </div>


        </div>
    </header>