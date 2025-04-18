@extends('layout.index')
@section('title', 'Blog')
<link rel="stylesheet" href="{{ url('asset/css/videos.css') }}">
<link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
<body>
    @section('main-content')
        <div class="videos pt-4">
            <div class="container p-0 pb-4">

                <video controls oncontextmenu="return false" style="object-fit: cover; width: 100%; height: 80%;" poster="{{ asset('storage/' . $vcards->get(17)->image20) }}">
                    <source src="{{ asset('storage/' . $vcards->get(17)->video20) }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <h4>{{$vcards->get(17)->description20}}</h4>
                <p>
                    👉 Watch this full video : <a href="{{$vcards->get(17)->youtubelinks20}}">https://youtube.com</a>
                </p>
            </div>
        </div>
    @endsection
</body>
