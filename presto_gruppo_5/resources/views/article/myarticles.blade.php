<x-layout>

    <x-slot name='title'>
        Homepage
    </x-slot>
    <x-header />

    <div class="container justify-content-center mt-5">
        <div class="row text-center">
            <div class="col-12">
                <h1 class="font-primary h1-relative"> {{__('ui.articoli')}}</h1>
            </div>
        </div>


        <div class="row d-flex align-items-center">


            @foreach ($articles as $article)
                <div class="col-12 col-md-5 col-lg-4 col-xl-3 justify-content-center d-flex">
                    <ul class="ul-card">
                        <li class="booking-card"
                            style="background-image: url('{{ $article->images->first()->getUrl(180, 300) }}')">
                            <div class="book-container">
                                <div class="content">
                                    <a class="btn" href="{{ route('article.show', compact('article')) }}">
                                        {{__('ui.button1')}}
                                    </a>
                                </div>
                            </div>
                            <div class="informations-container">
                                <h2 class="h2-card title">{{ $article->title }}</h2>
                                <p class="sub-title"><a
                                        href="{{ route('article.type', [
                                            'category_id' => $article->category->id,
                                        ]) }}">#{{ $article->category->name }}</a>
                                </p>
                                <p class="price"><svg class="icon" style="width:24px;height:24px"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M3,6H21V18H3V6M12,9A3,3 0 0,1 15,12A3,3 0 0,1 12,15A3,3 0 0,1 9,12A3,3 0 0,1 12,9M7,8A2,2 0 0,1 5,10V14A2,2 0 0,1 7,16H17A2,2 0 0,1 19,14V10A2,2 0 0,1 17,8H7Z" />
                                    </svg>{{ $article->price }}€</p>
                                <div class="more-information">
                                    <div class="info-and-date-container">
                                        <div class="box info">
                                            <svg class="icon" style="width:24px;height:24px"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M11,9H13V7H11M12,20C7.59,20 4,16.41 4,12C4,7.59 7.59,4 12,4C16.41,4 20,7.59 20,12C20,16.41 16.41,20 12,20M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M11,17H13V11H11V17Z" />
                                            </svg>
                                            <p> {{__('ui.people')}} {{ $article->user->name }}</p>
                                        </div>
                                        <div class="box date">
                                            <svg class="icon" style="width:24px;height:24px"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M19,19H5V8H19M16,1V3H8V1H6V3H5C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V5C21,3.89 20.1,3 19,3H18V1M17,12H12V17H17V12Z" />
                                            </svg>
                                            <p> {{__('ui.day')}}
                                                {{ $article->created_at->format('d/m/Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            @endforeach

        </div>
    </div>


</x-layout>
