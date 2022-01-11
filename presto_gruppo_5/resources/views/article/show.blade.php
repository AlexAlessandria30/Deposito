<x-layout>

    <x-slot name='title'>
        Details
    </x-slot>
    <x-header />
    <div class="container mt-5 shadow-lg p-3 mb-5  sfondoarancio rounded">

        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 p-3 mb-5 rounded mx-2">
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
                <p> {{ __('ui.people') }} : {{ $article->user->name }}</p>
                <p>{{ __('ui.day') }} : {{ $article->created_at->format('d/m/Y') }}</p>


            @if (Auth::id() === $article->user->id)
                <form method="POST" action="{{route('article.destroy', compact('article'))}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn mb-1"> <i class="fa-solid fa-trash-arrow-up"></i> </button>
                </form>
            @endif

                
            </div>


            <div class="col-12 col-md-11 shadow-lg p-3 mb-5 bg-body rounded">
                <p class="font-secondary fs-3">{{ $article->description }}</p>
            </div>



        </div>


    </div>

</x-layout>
