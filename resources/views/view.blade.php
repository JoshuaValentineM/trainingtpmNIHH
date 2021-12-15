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
    <h1>View Books</h1>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
        @foreach ($books as $book)
        <tr>
        <th scope="row">{{ $book->id }}</th>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>
            <a href="{{route('getBookById', ['id'=>$book->id])}}"><button type ="submit" class="btn btn-success">Edit</button></a>
            <form action="{{route('delete', ['id' => $book->id])}} " method="POST">
                @csrf
                @method('delete')
                <button type ="submit" class ="btn btn-danger">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
  </tbody>
</table>
</body>
</html>
