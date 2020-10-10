@extends('layouts.layout')

@section('content')
   <h1>Users</h1>
   <div class="d-flex justify-content-center">
      <table class="table table-light col-lg-6">
         <thead class="thead-dark">
            <tr>
               {{-- <th scope="col">#</th> --}}
               <th scope="col">Name</th>
               <th scope="col">Email</th>
            </tr>
         </thead>
         <tbody>
            @foreach ($users as $user)
               <tr>
                  <td scope="row">{{ $user->name }}</td>
                  <td>{{ $user->email }}</td>
               </tr>
            @endforeach
         </tbody>
      </table>
   </div>
@endsection