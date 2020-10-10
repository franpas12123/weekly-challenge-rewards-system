@extends('layouts.layout')

@section('content')
<div class="container-fluid">
  <div class="container vh-100">
    <div class="row align-items-center h-75">
      <div class="col mb-3">
        <h1 class="display-3 mb-2 d-none d-lg-block">WEEKLY CHALLENGE</h1>
        <h1 class="mb-2 d-lg-none">WEEKLY CHALLENGE</h1>
        <p class="lead">Earn points by completing challenges every week!</p>
      </div>
  
      <div class="col-md-8 col-lg-4 mx-auto">
        <div class="card">
            <div class="card-body">
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row">
                  <div class="col mb-3">
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                      <div class="invalid-feedback">
                        Please enter a valid email address.
                      </div>
                  </div>
            
                </div>
                <div class="row">
                  <div class="col mb-3">
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                      <div class="invalid-feedback">
                        Please input password
                      </div>
                  </div>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Log In</button>
              </form>
              <hr>
              <a class="btn btn-success btn-lg btn-block mb-2" href="{{ route('user.create') }}">Create New Account</a>
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="container my-auto">
        <img src="{{ asset('/img/black_kind_about_us.jpg') }}" class="img-fluid about-us" alt="">
      </div>
    </div>
  </div>
</div>
@endsection