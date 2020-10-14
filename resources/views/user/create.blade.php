@extends('layouts.layout')

@section('content')
   <div class="container">
      <div class="card col-md-8 col-lg-6 mx-auto text-dark">
         <div class="card-body">
            <h1 class="mb-3">Sign up now to participate!</h1>
            <hr>
               <form action="{{ route('register') }}" method="post" class="needs-validation">
                  @csrf
                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-user fa-lg input-group-text py-2"></i>
                        </div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your name" required>
                        @error('name')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>

                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-at input-group-text py-2"></i>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" required>
                        @error('email')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>

                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-lock fa-lg input-group-text pt-2"></i>
                        </div>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter your password" required>
                        @error('password')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>

                  <div class="row">
                     <div class="col input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-lock fa-lg input-group-text pt-2"></i>
                        </div>
                        <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
                        @error('password')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>

                  <hr>
                  
                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-flag input-group-text pt-2"></i>
                        </div>
                        <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" placeholder="Enter your country" required>
                        @error('country')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-briefcase fa-lg input-group-text pt-2"></i>
                        </div>
                        <input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" placeholder="Enter your occupation" required>
                        @error('occupation')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-book fa-lg input-group-text pt-2"></i>
                        </div>
                        <textarea class="form-control @error('about') is-invalid @enderror" name="about" placeholder="Tell us a little something about you" required></textarea>
                        @error('about')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                        @enderror
                     </div>
                  </div>
                  
                  <div class="row">
                     <div class="col mb-3 input-group">
                        <div class="input-group-prepend">
                           <i class="fa fa-globe fa-lg input-group-text pt-2"></i>
                        </div>
                        <input type="text" class="form-control" name="website" placeholder="Enter your website (if any)">
                     </div>
                  </div>
                  <button class="btn btn-success btn-lg btn-block col-lg-6 mx-auto" type="submit">Sign up</button>
               </form>
         </div>
      </div>
   </div>
@endsection