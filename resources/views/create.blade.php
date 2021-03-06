@extends('layouts.layout')
@section('content')

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head> --}}
<body>
    <h1>Create form</h1>

    @guest
        <a href="{{route('login')}}">Login</a>
        @else
        <form action ="{{route('logout')}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">logout</button>
        </form>
    @endguest
    {{-- <form action ="{{route('logout')}}" method="POST">
        <button type="submit" class="btn btn-danger">logout</button>
    </form> --}}

    <form action="{{ route('createBook') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Title">
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input name="author" type="text" class="form-control" id="formGroupExampleInput" placeholder="Input Author">
        </div>
        <div class="mb-3">
            <label for="release" class="form-label">Release Date</label>
            <input name="release" type="date" class="form-control" id="formGroupExampleInput" placeholder="Input Date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input name="price" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Input Price">
        </div>
        <div class="mb-3">
            <label for="genreId" class="form-label">Genre Id</label>
            <input name="genreId" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="genre id">
        </div>
        @error('price')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
{{--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> --}}
@endsection
