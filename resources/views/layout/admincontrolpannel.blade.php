<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '')</title>
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://releases.transloadit.com/uppy/v3.0.0/uppy.min.js"></script>
    <link href="https://releases.transloadit.com/uppy/v3.0.0/uppy.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('asset/css/home.css') }}">
    <link rel="stylesheet" href="{{ url('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('asset/css/adminstyle.css') }}">
</head>

<body>
    <div class="row p-0 m-0">
        <div class="col-2 p-0 m-0">
            @include('layout.include.aside')
        </div>
        <div class="col-10 m-0 p-0" >
            @include('layout.include.adminheader')
            <div style="overflow: scroll; height: 90vh;">
                @section('admin-content')
                @show
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        < /scrip> <
        /body>

        <
        /html>
