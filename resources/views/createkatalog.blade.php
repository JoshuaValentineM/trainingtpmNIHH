@extends('layouts.layout')
@section('content')

<body>
    <h1>Create Katalog</h1>

    <form action="{{ route('createKatalog') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">nama</label>
            <input name="nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama Pengurus">
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">jurusan</label>
            <input name="jurusan" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jurusan">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">jabatan</label>
            <input name="jabatan" type="text" class="form-control" id="formGroupExampleInput" placeholder="Jabatan">
        </div>
        <div class="mb-3">
            <label for="tempatlahir" class="form-label">Tempat Lahir</label>
            <input name="tempatlahir" type="text" class="form-control" id="formGroupExampleInput" placeholder="Tempat Lahir">
        </div>
        <div class="mb-3">
            <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
            <input name="tanggallahir" type="date" class="form-control" id="formGroupExampleInput" placeholder="Tanggal Lahir">
        </div>
        <div class="mb-3">
            <label for="nomorhp" class="form-label">Nomor WA</label>
            <input name="nomorhp" type="numeric" class="form-control" id="formGroupExampleInput" placeholder="Nomor WA">
        </div>
        <div class="mb-3">
            <label for="idline" class="form-label">id line</label>
            <input name="idline" type="text" class="form-control" id="formGroupExampleInput" placeholder="ID Line">
        </div>
        @error('Nomor WA')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-success">Insert</button>
    </form>
{{--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html> --}}
@endsection
