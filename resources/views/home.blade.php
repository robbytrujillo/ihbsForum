<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IHBS FORUM</title>

        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.ico">
        <link rel="manifest" href="/site.webmanifest">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-secondary">
            <div class="container flex justify-content-between">
              <a class="navbar-link" href="{{ route('home') }}">
                <img class="h-24px" src="{{ url('assets/images/forum-logos.png') }}" alt="ihbsforum logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-0 mx-lg-3">
                  <li class="nav-item d-block d-lg-none d-xl-block">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="#">Discussion</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="#">About Us</a>
                  </li>
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                      <img src=""
                    </span>
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-primary" type="submit">Search</button>
                  </div>
                </form>
              </div>
            </div>
        </nav>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
