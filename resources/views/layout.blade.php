<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <title>Restaurant App</title>
</head>
<body>

<!-- Navbar Start -->

<nav class="navbar navbar-expand-md  navbar-light bg-light shadow-sm">
      <a class="navbar-brand text-danger fw-bold fs-4" href="/">Resto</a>
      <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 px-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-3" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="/list">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="">Add</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="">Search</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-3" href="">Register</a>
          </li>

        </ul>
    </div>
  </nav>

  <!-- Navbar End -->
<div class="container">
    @yield('content')
</div>


{{-- <footer>
    Copyright by Restaurant App
</footer> --}}

</body>
</html>
