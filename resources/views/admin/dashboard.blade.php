@extends('layout.admincontrolpannel')
@section('title','dashboard')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cards Count Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @section('admin-content')
        <div class="container">
            <h1 class="my-4">Cards Count Dashboard</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Cards
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $totalCards }}</h5>
                        </div>
                    </div>
                </div>

                @foreach ($cardsByStatus as $status => $count)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Cards in {{ ucfirst($status) }}
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $count }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
</body>

</html>
