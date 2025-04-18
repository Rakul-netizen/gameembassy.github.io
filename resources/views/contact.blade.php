@extends('layout.index')
@section('title', 'contact')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    @section('main-content')
        <div class="container mb-5">
            <div class="row mt-5" style="overflow: hidden; box-shadow:0 0px 19px rgba(0, 0, 0, 0.1);  border-radius: 10px">
                <div class="col-lg-6 d-lg-block d-none pb-5"
                    style="background: linear-gradient(to right, rgb(221, 145, 215), rgb(234, 183, 224), rgb(243, 207, 233), rgb(255, 255, 255)); padding-left: 2%; padding-top: 3%;"
                    id="contact-links">
                    <div class="row" id="contact-link">
                        <div class="col-12 mt-4">
                            <h3>{{ $contactheading }}</h3>
                            <p>{{ $contactpara }}</p>
                        </div>
                        <div class="col-12 mt-4" style="font-weight: bold">
                            <i style="font-size: 18px" class="fa-solid fa-envelope"></i>
                            <span>{{ $email }}</span>
                        </div>
                        <div class="col-12 mt-4" style="font-weight: bold">
                            <i style="font-size: 18px" class="fa-brands fa-square-instagram"></i>
                            <span>{{ $instagram }}<a href="/instagram" target="_blank" style="text-decoration: none;"> https://www.instagram.com/</a></span>
                        </div>
                        <div class="col-12 mt-4" style="font-weight: bold">
                            <i style="font-size: 18px" class="fa-brands fa-facebook-messenger"></i>
                            <span>{{ $facebook }}<a href="/facebook" target="_blank" style="text-decoration: none;"> https://www.facebook.com/</a> </span>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-12 ps-0 pe-0">
                    <div class="contact-form" id="contact">
                        <h3 style="text-transform: uppercase; padding-bottom: 10px;">{{ $heading }}</h3>
                        <form action="/send" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" name="fullname" placeholder="fullname" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" name="email" placeholder="email address" required>
                                </div>
                                <div class="col-12">
                                    <input type="tel" name="phoneno" placeholder="phone number" required>
                                </div>
                                <div class="col-12">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" placeholder="Message" id="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="send-btn" name="send">{{ $send }}</button>
                                </div>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops! there are problems in send the file</strong>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
