@extends('layouts.auth')

@section('body')
    <section class="bg-gray vh-100">
        <div class="container h-100 pt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-3">
                    <a href="" class="nav-link mb-5 text-center">
                        <img src="{{ url('assets/images/ihbsforum-logos.png') }}" alt="ihbsforum logo" class="h-28px"/>
                    </a>
                    <div class="card mb-5">
                        <form action="">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" autocomplete="off" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection