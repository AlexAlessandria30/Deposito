<x-layout>

    <x-slot name='title'>
        Revisor
    </x-slot>
    <x-header />

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="font-primary h1-relative">{{ __('ui.welcomerev') }}</h1>
            </div>
        </div>
    </div>


    @if ($article)

        <div class="container mt-5 shadow-lg p-3 mb-5 bg-light rounded">

            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-6 shadow-lg p-3 mb-5 bg-body rounded mx-2">



                    @foreach ($article->images as $image)
                        <div class="container">
                            <div class="row">


                                <div class="col-12">
                                    <img src="{{ $image->getUrl(500, 300) }}" class="" alt="">
                                </div>
                                <div class="col-12 col-md-6">
                                    Adult:{{ $image->adult }}<br>
                                    spoof: {{ $image->spoof }}<br>
                                    medical:{{ $image->medical }}<br>
                                    violence:{{ $image->violence }}<br>
                                    racy:{{ $image->racy }}<br>
                                </div>
                                <ul class="col-12 col-md-6">
                                    @if ($image->labels)
                                        @foreach ($image->labels as $label)
                                            <li>{{ $label }}</li>
                                        @endforeach

                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endforeach






                </div>


                <div class="col-12 col-md-5 shadow-lg p-3 mb-5 bg-body rounded mx-2">
                    <h1 class=" fs-1">{{ $article->title }}</h1>
                    <a href="{{ route('article.type', ['category_id' => $article->category->id]) }}">
                        <p>#{{ $article->category->name }}</p>
                    </a>

                    <p><b>{{ $article->price }}€</b></p>
                    <p> {{ __('ui.people') }} : {{ $article->user->name }}</p>
                    <p>{{ __('ui.day') }} : {{ $article->created_at->format('d/m/Y') }}</p>
                </div>


                <div class="col-12 col-md-11 shadow-lg p-3 mb-5 bg-body rounded">
                    <p class="font-secondary fs-3">{{ $article->description }}</p>
                </div>

            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <form action="{{ route('revisor.accept', $article->id) }}" method="post">
                    @csrf
                    <button class="btn btn-success" type="submit">{{ __('ui.button7') }}</button>
                </form>

            </div>
            <div class="col-12 col-md-6">
                <form action="{{ route('revisor.reject', $article->id) }}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit">{{ __('ui.button8') }}</button>
                </form>

            </div>
        </div>


    @else
        <div class="container mb-5">
            <div class="row text-center mb-5">
                <div class="col-12 mb-5">
                    <h1>{{ __('ui.emptyrev') }}</h1>
                </div>
            </div>
        </div>


    @endif

    <div class="container">
        <div class="row  justify-content-center text-center m-5">
            <div class="col-12 col-md-6">
                <form action="{{ route('rev.trash', compact('article')) }}" method="Get">
                    @csrf
                    <button class="btn btn-danger" type="submit">{{ __('ui.button9') }}</button>
                </form>

            </div>

        </div>
    </div>



</x-layout>
