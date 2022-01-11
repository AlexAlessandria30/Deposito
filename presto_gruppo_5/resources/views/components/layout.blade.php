<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>Presto.it</title> 
    <!-- <link rel="icon" href="./image/favicon.ico" /> -->
    <!-- <link rel="icon" href="/image/favicon.ico" type="image/x-icon"> -->
 
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Lilita+One&display=swap"
        rel="stylesheet">

    {{-- FONT AWESOME --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"/>


        
        <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.2.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    {{-- carousel --}}
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    {{-- asset --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">




    <title>{{ $title ?? " "}}</title>
    

</head>

<body>
    <x-navbar/>



    {{ $slot }}

    <x-footer/>


    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.2.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
    {{-- carousel --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    {{-- asset --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
