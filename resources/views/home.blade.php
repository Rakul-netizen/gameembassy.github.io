@extends('layout.index')
@section('title', 'Home')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <title>@yield('title','Home')</title> --}}
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ url('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('asset/css/home.css') }}">
</head>

<body>
    @section('main-content')

        <section id="homevideo">
            <div class="row p-0 m-0">
                <div class="col-lg-8 clo-md-12 col-12 p-0 m-0">
                    <a href="{{ route('card' . $latestIndex . '.show', ['id' => $lcards->id]) }}">
                        <div class="heading">
                            @php
                                $titleKey = 'title' . $latestIndex;
                                $subtitleKey = 'subtitle' . $latestIndex;
                                $imagekey = 'image' . $latestIndex;
                            @endphp
                            @if ($lcards && $lcards->$imagekey)
                                <img src="{{ asset('storage/' . $lcards->$imagekey) }}" alt="" width="100%"
                                    height="700px">
                            @else
                                <h2>No image available</h2>
                            @endif
                            <div class="text">
                                @if ($lcards && $lcards->$titleKey)
                                    <h2>{{ $lcards->$titleKey }}</h2>
                                @else
                                    <h2>No title available</h2>
                                @endif
                                @if ($lcards && $lcards->$subtitleKey)
                                    <p>{{ $lcards->$subtitleKey }}</p>
                                @else
                                    <p>No description available</p>
                                @endif
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-4 d-lg-block d-md-none p-0 m-0">
                    <div class="sub-heading">
                        <div class="row p-0 m-0">
                            <div class="col-12 p-0 m-0">
                                @if ($secondLatestCard)
                                    <a href="{{ route('card' . $latestIndex . '.show', ['id' => $secondLatestCard->id]) }}">
                                @endif
                                <div class="img1" style="position: relative">
                                    @if ($secondLatestCard)
                                        @php
                                            $secondTitleKey = 'title' . $latestIndex;
                                            $secondsubtitleKey = 'subtitle' . $latestIndex;
                                            $secondimageKey = 'image' . $latestIndex;
                                        @endphp
                                        @if ($secondLatestCard->$secondTitleKey)
                                            <img src="{{ asset('storage/' . $secondLatestCard->$secondimageKey) }}"
                                                alt="" width="100%" height="400px">
                                        @else
                                            <h2>No image available</h2>
                                        @endif
                                        <div class="text1">
                                            @if ($secondLatestCard->$secondTitleKey)
                                                <h2>{{ $secondLatestCard->$secondTitleKey }}</h2>
                                            @else
                                                <h2>No title available</h2>
                                            @endif
                                            @if ($secondLatestCard->$secondsubtitleKey)
                                                <p>{{ $secondLatestCard->$secondsubtitleKey }}</p>
                                            @else
                                                <p>No subtitle available</p>
                                            @endif
                                        @else
                                            <h2>No second latest card</h2>
                                            <p>No description available</p>
                                    @endif
                                </div>
                            </div>
                            @if ($secondLatestCard)
                                </a>
                            @endif
                        </div>
                        <div class="col-12 p-0 m-0">
                            @if ($thirdLatestCard)
                                <a href="{{ route('card' . $latestIndex . '.show', ['id' => $thirdLatestCard->id]) }}">
                            @endif
                            <div class="img2" style="position: relative">
                                @if ($thirdLatestCard)
                                    @php
                                        $thirdTitleKey = 'title' . $latestIndex;
                                        $thirdsubtitleKey = 'subtitle' . $latestIndex;
                                        $thirdimageKey = 'image' . $latestIndex;
                                    @endphp
                                    @if ($thirdLatestCard->$thirdimageKey)
                                        <img src="{{ asset('storage/' . $thirdLatestCard->$thirdimageKey) }}"
                                            alt="" width="100%" height="400px">
                                    @else
                                        <h2>No image available</h2>
                                    @endif
                                    <div class="text2">
                                        @if ($thirdLatestCard->$thirdTitleKey)
                                            <h2>{{ $thirdLatestCard->$thirdTitleKey }}</h2>
                                        @else
                                            <h2>No title available</h2>
                                        @endif
                                        @if ($thirdLatestCard->$thirdsubtitleKey)
                                            <p>{{ $thirdLatestCard->$thirdsubtitleKey }}</p>
                                        @else
                                            <p>No subtitle available</p>
                                        @endif
                                    @else
                                        <h2>No second latest card</h2>
                                        <p>No description available</p>
                                @endif
                            </div>
                        </div>
                        @if ($thirdLatestCard)
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container mt-5 mb-5 pt-5 pb-5">
                <h1 class="text-center">Welcome Home</h1>
                <h5 class="text-center" style="color: grey;">Welcome to our website go-to spot for blog, consolegames, tips,
                    and the latest in gaming culture!</h5>
            </div>
        </section>

        <section class="bg-white">
            <div class="container pt-4 pb-5">
                <div class="row p-0 m-0">
                    <div class="col-12 mb-3">
                        <h2 class="text-center">Blog</h2>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-lg-6 col-12" style="overflow: hidden;">
                        <a href="/blog">
                            <img src="{{ asset('image/img2.jpg') }}" alt="" width="100%" height="300px"
                                style="border-radius: 10px;">
                        </a>
                    </div>
                    <div class="col-lg-6 col-12" style="display: flex; align-items: center;">
                        <p style="font-size: 17px;">
                            The battle between PlayStation,and mobile. PlayStation 6 boasts incredible visuals and
                            lightning-fast load times. Meanwhile, Nintendo Switch 2 blends handheld and console play
                            seamlessly, winning over fans with beloved franchises and portability. Each console offers
                            something unique, making the choice tougher than ever. Whether you're chasing performance,
                            exclusives, or innovation, there's a console for every kind of gamer. <br>
                            <a href="/blog" style="text-decoration: none">Click here</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container pt-5 pb-5">
                <h2 class="text-center">Contact Us</h2>
                <p style="font-size: 17px">
                    We’d love to hear from you! Whether you have questions, feedback, suggestions, or just want to talk
                    about your favorite games, we’re all ears. Our team is passionate about gaming and always open to
                    connecting with fellow players, readers, and creators. Feel free to reach out for collaboration
                    opportunities, technical support, or even just a friendly chat. You can contact us via email, social
                    media, or through our contact form. We do our best to respond within 24–48 hours. Thanks for being part
                    of our gaming community—we’re glad you’re here!<a href="/contact" style="text-decoration: none">Click
                        here</a>
                </p>
            </div>
        </section>

        <section class="bg-white">
            <div class="container pt-4 pb-5">
                <div class="row p-0 m-0">
                    <div class="col-12 mb-3">
                        <h2 class="text-center">About</h2>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-lg-6 col-12" style="display: flex; align-items: center;">
                        <p style="font-size: 17px;">
                            Gaming isn’t just something we do. It’s who we are. We grew up leveling up, learning boss patterns, rage-quitting, and building friendships through shared pixels and epic wins. At game embassy, we bring that lifelong love of gaming into every post, stream, and article we create. Whether you're into the nostalgia of retro games or hyped for the next-gen titles dropping this year — we’re right there with you. Here’s what we bring to the table: <br>
                            <a href="/about" style="text-decoration: none">Click here</a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <a href="/about">
                            <img src="{{ asset('image/img2.jpg') }}" alt="" width="100%" height="300px"
                                style="border-radius: 10px;">
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>
