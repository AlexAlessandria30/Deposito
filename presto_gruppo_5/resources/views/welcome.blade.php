<x-layout>

    <x-slot name='title'>
        Homepage
    </x-slot>



    <x-homeheader />

    <div class="container justify-content-center articoli5">
        <div class="row text-center align-items-center">

            <div class="col-12 col-lg-6">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($articles as $article)
                            <div class="swiper-slide">
                                <div class="imgBx rounded-3">

                                    <img src="{{ $article->images->first()->getUrl(500, 300) }}"
                                        class="d-block w-100 responsive" alt="{{ $article->title }}">
                                </div>
                                <div class="content container rounded-3">
                                    <div class="row  d-flex align-items-center">
                                        <h5 class="col-6">{{ $article->title }}</h5>
                                        <p class="col-6"><b>{{ $article->price }}€</b></p>
                                        <p class="col-6">{{ __('ui.category') }}: <a
                                                href="{{ route('article.type', [
                                                    'category_id' => $article->category->id,
                                                ]) }}">#{{ $article->category->name }}</a>
                                        </p>
                                        <a class="col-6 btn"
                                            href="{{ route('article.show', compact('article')) }}">
                                            {{ __('ui.button1') }}
                                        </a>


                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 articoli5-text py-3">
                <h5 class="font-secondary display-5">
                    {{ __('ui.presentation1') }}
                </h5>
                <p class="font-secondary display-4">
                    {{ __('ui.presentation2') }}
                </p>
            </div>

        </div>

    </div>








    <!-- perchè sceglierci -->
    
    
    <div class="text-center mt-5 mb-3">
        <h2 class="why-title font-secondary display-1">{{ __('ui.why') }}</h2>
    </div>
    <div class="container why-section mb-5 text-center justify-content-between">
        <div class="row pt-4 pb-4">
            <div class="col-12 col-lg-4 d-flex justify-content-center pb-3">
                <div class="card card-why1" style="width: 18rem;">
                    <div class="card-body text-center">
                        <i class="fas fa-fighter-jet why-icon"></i>
                        <h5 class="card-title mt-3">{{__('ui.titolo5')}}!</h5>

                        <p class="card-text">{{ __('ui.card5') }}.</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-center pb-3">
                <div class="card card-why2" style="width: 18rem;">
                    <div class="card-body text-center">
                        <i class="fas fa-hand-holding-usd why-icon"></i>
                        <h5 class="card-title mt-3">{{__('ui.titolo4')}}!</h5>

                        <p class="card-text">{{ __('ui.card4') }}.</p>

                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4 d-flex justify-content-center pb-3">
                <div class="card card-why3" style="width: 18rem;">
                    <div class="card-body text-center">
                    <i class="fas fa-user-shield why-icon"></i>
                        <h5 class="card-title mt-3">{{__('ui.titolo3')}}!</h5>

                        <p class="card-text">{{ __('ui.card3') }}.</p>

                    </div>
                </div>
            </div>

        </div>
    </div>





</x-layout>
