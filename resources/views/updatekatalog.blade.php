<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Update form</h1>

    <form action="{{route('updateKatalog', ['id' => $katalog->id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
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
        <button type="submit" class="btn btn-success">Update</button>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
