<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --> SET warna biru pada background color dari public css --}}

    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('getBooks')}}">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('getKatalogs')}}">Katalog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('getCreatePage')}}">Create Book</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('getKatalog')}}">Create Katalog</a>
              </li>

              {{-- <li class="nav-item" >
                <a class="nav-link" href="#">Link</a>
              </li> --}}
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
              {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li> --}}

              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">Login</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}" tabindex="-1" aria-disabled="true">Logout</a>
              </li>
            </ul>
            {{-- <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form> --}}
            <form class="d-flex" method="GET" action="/get-katalogs">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari nama pengurus.." name ="search" value="{{request('search')}}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
      </nav>

    @yield('content')
</body>
</html>
