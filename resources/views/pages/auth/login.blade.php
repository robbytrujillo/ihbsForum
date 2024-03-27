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
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection