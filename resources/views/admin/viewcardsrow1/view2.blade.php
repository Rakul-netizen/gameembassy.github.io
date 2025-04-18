@extends('layout.admincontrolpannel')
@section('title', 'view')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @section('admin-content')
    <div class="container">
        <table class="table table-dark table-striped mt-5">
            <thead>
                <tr class="border">
                    <th class="border">ID</th>
                    <th class="border">CARD_TITLE</th>
                    <th class="border">CARD_SUBTITLE</th>
                    <th class="border">CARD_YOUTUBELINKS</th>
                    <th class="border">CARD_DESCRIPTION</th>
                    <th class="border">CARD_CONTENT</th>
                    <th class="border">CARD_IMAGE</th>
                    <th class="border">CARD_VIDEO</th>
                </tr>
                <tbody>
                    @foreach ( $vbcards as $cards)
                    <tr class="border">
                        <td class="border">{{$cards->id}}</td>
                        <td class="border">{{$cards->title2}}</td>
                        <td class="border">{{$cards->subtitle2}}</td>
                        <td class="border">{{$cards->youtubelinks2}}</td>
                        <td class="border">{{$cards->description2}}</td>
                        <td class="border">{{$cards->content2}}</td>
                        <td class="border">{{$cards->image2}}</td>
                        <td class="border">{{$cards->video2}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    @endsection
</body>
</html>
