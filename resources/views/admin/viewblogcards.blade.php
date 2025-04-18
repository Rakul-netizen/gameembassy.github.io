@extends('layout.admincontrolpannel')
@section('title', 'view')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
</head>
<body>
    @section('admin-content')
    <div class="container">
        <table class="table table-dark table-striped mt-5">
            <thead>
                <tr class="border">
                    <th class="border">ID</th>
                    <th class="border">CARD_TITLE</th>
                    <th class="border">CARD_DESCRIPTION</th>
                    <th class="border">CARD_CONTENT</th>
                    <th class="border">CARD_IMAGE</th>
                </tr>
                <tbody>
                    @foreach ( $vbcards as $cards)
                    <tr class="border">
                        <td class="border">{{$cards->id}}</td>
                        <td class="border">{{$cards->admintitle}}</td>
                        <td class="border">{{$cards->admindescription}}</td>
                        <td class="border">{{$cards->admincontent}}</td>
                        <td class="border">{{$cards->adminimage}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    @endsection
</body>
</html>
