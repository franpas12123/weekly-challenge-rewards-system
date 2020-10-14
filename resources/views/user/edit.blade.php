@extends('layouts.layout')

@section('content')
   <main role="main" class="inner cover">
      <div class="container col-md-6 mx-auto">
         <h1 class="display-3">{{ $user->name }}</h1>
         
         <div class="card mb-3 text-dark mt-5">
            <div class="profile-pic-container">
               <img src="{{ asset('img/user-circle.png') }}" class="profile-pic" alt="...">
            </div>
            <div class="card-body">
               <form action="{{ route('user.update', ['name' => $user->name, 'id' => $user->id]) }}" method="post">
                  @csrf
                  <div class="d-flex justify-content-center col-lg-8 mx-auto">
                     <table class="table table-light user-details-table">
                        <tbody>
                           <tr>
                              <td scope="row">Email</td>
                              <td class="text-center">{{ $user->email }}</td>
                           </tr>
                           <tr>
                              <td scope="row">Country</td>
                              <td class="text-center"><input type="text" name="country" placeholder="@if($user->country === null || $user->country == '') Input Country @endif" value="{{ $user->country }}"></td>
                           </tr>
                           <tr>
                              <td scope="row">Occupation</td>
                              <td class="text-center"><input type="text" name="occupation" placeholder="@if($user->occupation === null || $user->occupation == '') Input Occupation @endif" value="{{ $user->occupation }}"></td>
                           </tr>
                           <tr>
                              <td scope="row">About</td>
                              <td class="text-center"><textarea name="about" placeholder="@if($user->about === null || $user->about == '') Input something about you @endif">{{ $user->about }}</textarea></td>
                           </tr>
                           <tr>
                              <td scope="row">Website</td>
                              <td class="text-center"><input type="text" name="website" placeholder="@if($user->website === null || $user->website == '') Input Website @endif" value="{{ $user->website }}"></td>
                           </tr>
                           <tr>
                              <td scope="row">Level</td>
                              <td class="text-center">{{ $user->level }}</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <button class="btn btn-success" type="submit">Save Changes</button>
               </form>
            </div>
          </div>
      </div>
   </main>
@endsection