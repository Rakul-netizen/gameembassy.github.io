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
                    <th class="border">USER_FULLNAME</th>
                    <th class="border">USER_EMAIL</th>
                    <th class="border">USER_PHONENO</th>
                    <th class="border">USER_SUBJECT</th>
                    <th class="border">USER_MESSAGE</th>
                </tr>
                <tbody>
                    @foreach ( $ucards as $cards)
                    <tr class="border">
                        <td class="border">{{$cards->id}}</td>
                        <td class="border">{{$cards->fullname}}</td>
                        <td class="border">{{$cards->email}}</td>
                        <td class="border">{{$cards->phoneno}}</td>
                        <td class="border">{{$cards->subject}}</td>
                        <td class="border">{{$cards->message}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </thead>
        </table>
    </div>
    @endsection
</body>
</html>
