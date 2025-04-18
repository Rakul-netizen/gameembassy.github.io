@extends('layout.index')
@section('title', 'Blog')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="{{ url('asset/css/home.css') }}">
</head>

<body>
    @section('main-content')
        <section id="homevideo">
            <div class="row p-0 m-0">
                <div class="col-8 p-0 m-0">
                    <div class="heading" onclick="window.location='{{ url('card5/row1card/'.$lcards->id) }}'">
                        <img src="{{ asset('storage/' . $lcard->image5) }}" alt="" width="100%" height="700px">
                        <div class="text">
                            <h2>{{$lcards->title5}}</h2>
                            <p>{{$lcards->subtitle5}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 p-0 m-0">
                    <div class="sub-heading">
                        <div class="row p-0 m-0">
                            <div class="col-12 p-0 m-0">
                                <div class="img1" onclick="window.location='{{ url('card5/row1card/'.$ocards->id) }}'">
                                    <img src="{{ asset('storage/' . $ocards->image5) }}"alt="" width="100%"
                                        height="300px">
                                    <div class="text1">
                                        <h2>{{$ocards->title5}}</h2>
                                        <p>{{$ocards->subtitle5}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 p-0 m-0">
                                <div class="img2" onclick="window.location='{{ url('card5/row1card/'.$ocards2->id) }}'">
                                    <img src="{{ asset('storage/' . $ocards2->image5) }}" alt="" width="100%"
                                        height="300px">
                                    <div class="text2">
                                        <h2>{{$ocards2->title5}}</h2>
                                        <p>{{$ocards2->subtitle5}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="card1-main">
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 mt-3 m-0">
                        {{-- cards --}}
                        <h2>view 1</h2>
                        <div class="row p-0 m-0">
                            @foreach ( $cards as $card)
                            <div class="col-12 col-md-6 col-lg-4 p-0 pe-0 pe-md-4 pe-lg-4 m-0 mb-4">
                                <div class="cards h-100" onclick="window.location='{{ url('card5/row1card/'.$card->id) }}'">
                                    <img src="{{ asset('storage/' . $card->image5) }}" alt="" width="40%" height="auto">
                                    <div class="text ps-2">
                                        <h3>{{$card->title5}}</h3>
                                        <p>{{$card->description5}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        {{-- cards end --}}
                    </div>
                </div>
        </section>

    @endsection
</body>

</html>
