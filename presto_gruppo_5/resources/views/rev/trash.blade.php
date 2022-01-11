<x-layout>

    <x-slot name='title'>
        Trash
    </x-slot>
    <x-header />

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 mt-5">
                <h1 class="font-primary h1-relative">{{__('ui.welcometrash')}}</h1>
            </div>
        </div>
    </div>


    @if ($article)
       
            <div class="container mt-5 shadow-lg p-3 mb-5 bg-light rounded">

                <div class="row justify-content-center text-center">
                    <div class="col-12 col-md-6 shadow-lg p-3 mb-5 bg-body rounded mx-2">
                        <div
                            class="swiffy-slider slider-item-nogap slider-nav-visible slider-nav-nodelay slider-nav-autoplay slider-nav-autopause slider-nav-animation slider-nav-animation-fadein slider-nav-mousedrag">
                            <ul class="slider-container" style="">
        
        
                                @foreach ($article->images as $image)
                                    <li class="">
                                        <img src="{{ $image->getUrl(500, 300) }}" class="" alt="">
                                    </li>
                                @endforeach
        
                            </ul>
        
                            <button type="button" class="slider-nav"></button>
                            <button type="button" class="slider-nav slider-nav-next"></button>
        
                        </div>
        
                    </div>
        
        
                    <div class="col-12 col-md-5 shadow-lg p-3 mb-5 bg-body rounded mx-2">
                        <h1 class=" fs-1">{{ $article->title }}</h1>
                        <a href="{{ route('article.type', ['category_id' => $article->category->id]) }}">
                            <p>#{{ $article->category->name }}</p>
                        </a>
        
                        <p><b>{{ $article->price }}€</b></p>
                        <p> {{__('ui.people')}} : {{ $article->user->name }}</p>
                        <p>{{__('ui.day')}} : {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
        
        
                    <div class="col-12 col-md-11 shadow-lg p-3 mb-5 bg-body rounded">
                        <p class="font-secondary fs-3">{{ $article->description }}</p>
                    </div>
        
                </div>
            </div>
            
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-6">
                    <form action="{{ route('revisor.notaccept', $article->id) }}" method="post">
                        @csrf
                        <button class="btn btn-success" type="submit">{{__('ui.button5')}}</button>
                    </form>

                </div>
                <div class="col-12 col-md-6">

                    <form action="{{ route('revisor.destroy', compact('article')) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn ">{{__('ui.button6')}}</button>
                    </form>

                </div>
            </div>
        </div>

    @else
        <div class="container mb-5">
            <div class="row text-center mb-5">
                <div class="col-12 mb-5">
                    <h1>{{__('ui.empty')}}</h1>
                </div>
            </div>
        </div>


    @endif

    <div class="container">
        <div class="row  justify-content-center text-center m-5">
            <div class="col-12 col-md-6">
                <form action="{{ route('rev.revisor')}}" method="Get">
                    @csrf
                    <button class="btn btn-danger" type="submit">{{__('ui.revisor')}}</button>
                </form>

            </div>

        </div>
    </div>




</x-layout>
