<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IHBS Forum</title>

        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.ico">
        <link rel="manifest" href="/site.webmanifest">

        @vite(['resources/scss/app.scss', 'resources/js/app.js'])

    </head>
    <body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-white">
            <div class="container flex justify-content-between">
              <a class="navbar-link" href="{{ route('home') }}">
                <img class="h-28px" src="{{ url('assets/images/ihbsforum-logos.png') }}" alt="ihbsforum logo">
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
                    <a class="nav-link" aria-current="page" href="#">Discussion</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-nowrap" aria-current="page" href="#">About Us</a>
                  </li>
                </ul>
                <form class="d-flex w-100 me-4 my-2 my-lg-0" role="search" action="#" method="GET">
                  <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                      <img src="{{ url('assets/images/icon-search.png') }}" alt="Search">
                    </span>
                    <input class="form-control border-start-0 ps-0" type="search" placeholder="Search" aria-label="Search" name="" value="">
                  {{-- <button class="btn btn-outline-primary" type="submit">Search</button> --}}
                  </div>
                </form>
                <ul class="navbar-nav ms-auto my-2 my-lg-0"> 
                  <li class="nav-item my-auto">
                    <a class="nav-link text-nowrap" href="#">Log In</a>
                  </li>
                  <li class="nav-item ps-1 pe-0">
                    <a class="btn btn-primary-white" href="#">Sign Up</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
      
        {{-- Hero Section --}}
        <section class="container hero">
          <div class="row align-items-center h-100">
            <div class="col-12 col-lg-6">
              <h1>IHBS<br />Comunity Forum</h1>
              <p class="mb-4">Empowering The IHBS Community to connect, share, and learn</p>
              <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
              <a href="#" class="btn btn-secondary me-2 mb-2 mb-lg-0">Join Discussion</a>
            </div>
            <div class="col-12 col-lg-6 h-315px order-first order-lg-last mb-3 mb-lg-0">
              <img class="hero-image float-lg-end" src="{{ url('assets/images/hero.png') }}" alt="hero">
              
            </div>
          </div>
        </section>

        {{-- Promotion Sections --}}
        <section class="container min-h-372px">
          <div class="row">
            <div class="col-12 col-lg-4 text-center">
              <img class="promote-icon mb-2" src="{{ url('assets/images/icons/discussions.png') }}" alt="Discussions">
              <h2>Discussions</h2>
              <p class="fs-3">111</p>
            </div>
            <div class="col-12 col-lg-4 text-center">
              <img class="promote-icon mb-2" src="{{ url('assets/images/icons/answers.png') }}" alt="Answers">
              <h2>Answers</h2>
              <p class="fs-3">1200</p>
            </div>
            <div class="col-12 col-lg-4 text-center">
              <img class="promote-icon mb-2" src="{{ url('assets/images/icons/users.png') }}" alt="Users">
              <h2>Users</h2>
              <p class="fs-3">1433</p>
            </div>
          </div>
        </section>

        {{-- Help Others Section --}}
        <section class="bg-gray">
          <div class="container py-80px">
            <h2 class="text-center mb-5 c-primary">Help Others</h2>
            <div class="row">
              <div class="col-12 col-lg-4 mb-3">
                <div class="card">
                  <a href="#">
                    <h3>How to add a custom validation in IHBS?</h3>
                  </a>
                  <div>
                    <p class="mb-5">I am working on a blogging application in IHBS. There are 4 user roles, among which, the ...</p>
                    <div class="row">
                      <div class="col me-1 me-lg-2">
                        <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                      </div>
                      <div class="col-5 col-lg-7">
                        <div class="avatar-sm-wrapper d-inline-block">
                          <a href="#" class="me-1">
                            <img src="{{ url('assets/images/avatar-sm.png') }}" class="avatar rounded-circle" alt="avatar">
                          </a>
                        </div>
                        <span class="fs-12px">
                          <a href="#" class="me-1 fw-bold">robbyik</a>
                          <span class="color-gray">7 hours ago</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4 mb-3">
                <div class="card">
                  <a href="#">
                    <h3>Middleware go looping sometimes</h3>
                  </a>
                  <div>
                    <p class="mb-5">Can you guys know why my user entering a redirect loop sometimes? It's happened very ...</p>
                    <div class="row">
                      <div class="col me-1 me-lg-2">
                        <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                      </div>
                      <div class="col-5 col-lg-7">
                        <div class="avatar-sm-wrapper d-inline-block">
                          <a href="#" class="me-1">
                            <img src="{{ url('assets/images/avatar-sm.png') }}" class="avatar rounded-circle" alt="avatar">
                          </a>
                        </div>
                        <span class="fs-12px">
                          <a href="#" class="me-1 fw-bold">robbyik</a>
                          <span class="color-gray">7 hours ago</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-lg-4 mb-3">
                <div class="card">
                  <a href="#">
                    <h3>'Property of Non-Object' Error</h3>
                  </a>
                  <div>
                    <p class="mb-5">I'm trying to access a pivot table column value in Blade. When I dd() the following line, I ...</p>
                    <div class="row">
                      <div class="col me-1 me-lg-2">
                        <a href="#"><span class="badge rounded-pill text-bg-light">Eloquent</span></a>
                      </div>
                      <div class="col-5 col-lg-7">
                        <div class="avatar-sm-wrapper d-inline-block">
                          <a href="#" class="me-1">
                            <img src="{{ url('assets/images/avatar-sm.png') }}" class="avatar rounded-circle" alt="avatar">
                          </a>
                        </div>
                        <span class="fs-12px">
                          <a href="#" class="me-1 fw-bold">robbyik</a>
                          <span class="color-gray">7 hours ago</span>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        {{-- CTA section --}}
        <section class="container min-h-372px d-flex flex-column align-items-center justify-content-center">
          <h2>Ready to contribute?</h2>
          <p class="mb-4">Want to make a big impact</p>
          <div class="text-center">
            <a href="#" class="btn btn-primary me-2 mb-2 mb-lg-0">Sign Up</a>
            <a href="#" class="btn btn-secondary me-2 mb-2 mb-lg-0">Join Discussion</a>
          </div>
        </section>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>
