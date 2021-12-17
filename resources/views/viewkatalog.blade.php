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
    <h1>Katalog Pengurus BNCC</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nama Pengurus</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Nomor Whatsapp</th>
      <th scope="col">ID Line</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($katalog as $katalog)
        <tr>
        <th scope="row">{{ $katalog->id }}</th>
        <td>{{ $katalog->nama}}</td>
        <td>{{ $katalog->jurusan}}</td>
        <td>{{ $katalog->jabatan}}</td>
        <td>{{ $katalog->tempatlahir}}</td>
        <td>{{ $katalog->tanggallahir}}</td>
        <td>{{ $katalog->nomorhp}}</td>
        <td>{{ $katalog->idline}}</td>
        <td>
            <a href="{{route('getKatalogById', ['id'=>$katalog->id])}}"><button type ="submit" class="btn btn-success">Edit</button></a>
            <form action="{{route('deleteKatalog', ['id' => $katalog->id])}} " method="POST">
                @csrf
                @method('delete')
                <button type ="submit" class ="btn btn-danger">Hapus</button>
            </form>
        </td>
        </tr>
        @endforeach
  </tbody>
</table>
</body>
</html>
