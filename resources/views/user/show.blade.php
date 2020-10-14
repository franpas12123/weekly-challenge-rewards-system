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
               <div class="d-flex justify-content-center col-lg-10 mx-auto">
                  <table class="table table-light user-details-table">
                     <tbody>
                        <tr>
                           <td scope="row">Email</td>
                           <td class="text-center">{{ $user->email }}</td>
                        </tr>
                        <tr>
                           <td scope="row">Country</td>
                           <td class="text-center">{{ $user->country }}</td>
                        </tr>
                        <tr>
                           <td scope="row">Occupation</td>
                           <td class="text-center">{{ $user->occupation }}</td>
                        </tr>
                        <tr>
                           <td scope="row">About</td>
                           <td class="text-center">{{ $user->about }}</td>
                        </tr>
                        <tr>
                           <td scope="row">Website</td>
                           <td class="text-center">{{ $user->website }}</td>
                        </tr>
                        <tr>
                           <td scope="row">Level</td>
                           <td class="text-center">{{ $user->level }}</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <form action="{{ route('user.update', ['name' => $user->name, 'id' => $user->id]) }}" method="post">
                  @csrf
                  <button class="btn btn-primary" type="submit">Edit</button>
               </form>
            </div>
          </div>
      </div>
   </main>
@endsection