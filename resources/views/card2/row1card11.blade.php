@extends('layout.index')
@section('title', 'Blog')
<link rel="stylesheet" href="{{ url('asset/css/videos.css') }}">
<link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
<body>
    @section('main-content')
        <div class="videos pt-4">
            <div class="container p-0 pb-4">

                <video controls oncontextmenu="return false" style="object-fit: cover; width: 100%; height: 80%;" poster="{{ asset('storage/' . $vcards->get(10)->image2) }}">
                    <source src="{{ asset('storage/' . $vcards->get(10)->video2) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h4>{{$vcards->get(10)->description2}}</h4>
                <p>
                    👉 Watch this full video : <a href="{{$vcards->get(10)->youtubelinks2}}">https://youtube.com</a>
                </p>
            </div>
        </div>
    @endsection
</body>
