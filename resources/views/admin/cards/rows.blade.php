@extends('layout.admincontrolpannel')
@section('title', 'cardedit')

<link rel="stylesheet" href="{{ url('asset/css/adminstyle.css') }}">
<link rel="icon" href="{{ asset('asset/icon/ge.png') }}" type="image/png">
@section('admin-content')

    @foreach ($cardIds as $i)
        <div id="cardseditor" style="margin-top: 40px">
            <div class="cards-edit-form mb-5 border p-3 rounded">
                <h2>card {{$i}} row 1</h2>
                <form method="POST" action="{{ url('/row' . $i) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="title{{ $i }}" placeholder="Title" required>
                        </div>
                        <div class="col-6">
                            <input type="text" name="subtitle{{ $i }}" placeholder="Subtitle" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="url" style="margin-top: 20px" name="youtubelinks{{$i}}" placeholder="youtubelinks">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea name="description{{ $i }}" placeholder="Description" style="height: 100px;" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea name="content{{ $i }}" placeholder="Content" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="file" name="image{{ $i }}" accept=".jpeg,.avif,.jpg,.png,.gif,.svg" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="file" id="videoFile" name="video{{ $i }}" accept="video/*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex justify-content-end gap-2 mt-2">
                                <button type="submit" onclick="uploadVideo()">Upload</button>
                                <a href="{{ url('/admin/viewcardsrow1/view/' . $i) }}">View</a>
                            </div>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops! there are problems in uploading the image</strong>
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
    @endforeach

    {{-- Pagination Links --}}
    <div class="row p-0 m-0">
        <div class="col-12 p-0 m-0">
            <div class="custom-pagination" style="margin-left: 30px; position: fixed; bottom: -2%;">
                {{ $cards->links('vendor.pagination.bootstrap-4') }}
            </div>
        </div>
    </div>

@endsection
