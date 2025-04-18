@extends('layout.admincontrolpannel')
@section('title','cardedit')

<head>
    <link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
    <style>
        input,textarea{
            width: 100%;
            padding: 5px 10px;
            outline: none;
        }

        #cards-form{
            padding: 30px 40px;
            background: white;
        }
        button,#view{
            border: none;
            text-decoration: none;
            background-color: #974290;
            color: white;
            padding: 5px 30px;
        }
    </style>
</head>
@section('admin-content')
    <div id="cardseditor" style="margin-top: 40px; width: 100%; display: flex; justify-content: center;">
        <div id="cards-form" style="width: 60%;">
            <h2 class="text-center">CardsEdit</h2>
            <form method="POST" action="/adminblogs" enctype="multipart/form-data">
                @csrf
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 mt-3 m-0">
                        <input type="text" name="admintitle" placeholder="title">
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 mt-3 m-0">
                        <textarea name="admindescription"  placeholder="description"></textarea>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 mt-3 m-0">
                        <textarea name="admincontent" style="height: 150px" placeholder="content"></textarea>
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-12 p-0 mt-3 m-0">
                        <input type="file" name="adminimage">
                    </div>
                </div>
                <div class="row p-0 m-0">
                    <div class="col-12 gap-2 d-flex justify-content-end">
                        <button type="submit">Upload</button>
                        <a href="{{'/viewblogcards'}}" id="view">View</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
