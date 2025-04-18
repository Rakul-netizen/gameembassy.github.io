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
</head>
<body>
    @section('main-content')
    <div class="container">
        <div class="row mt-5">
            @foreach ($cards as $card)
                <div class="col-12 col-sm-6 col-md-6 col-lg-3 mb-5">
                    @csrf
                    <div class="cards h-100" onclick="window.location='{{ url('/blogcards/'.$card->id) }}'"  style="background-color: white ; box-shadow:0 10px 15px rgba(0, 0, 0, 0.1); cursor: pointer; overflow: hidden;">
                        {{ ucfirst($card->type) }}
                        <img src="{{ asset('storage/' . $card->adminimage) }}" class="card-img-top" alt="not found" height="180px" width="100%">
                        <div class="card-body p-3">
                            <h5 class="card-title" style="font-weight: bold;">{{ $card->admintitle }}</h5>
                            <p class="card-text" style="font-size: 16px;">{{ $card->admindescription }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection

</body>
</html>
