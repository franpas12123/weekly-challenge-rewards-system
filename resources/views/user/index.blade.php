@extends('layouts.layout')

@section('content')
   <div class="container-fluid">
      <h1>Users</h1>
      <div class="d-flex justify-content-center mt-4">
         <table class="table table-light col-lg-6">
            <thead class="thead-dark">
               <tr>
                  {{-- <th scope="col">#</th> --}}
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($users as $user)
                  <tr>
                     <td scope="row">{{ $user->name }}</td>
                     <td>{{ $user->email }}</td>
                     @if ($user->id != 1)
                        <form action="{{ route('user.remove', ['id' => $user->id]) }}" method="post">
                           @csrf
                           {{-- <input type="hidden" name="challenge-id" value="{{ $challenge->id }}"> --}}
                           <td><button type="submit" name="button" id="" class="btn btn-danger"><i class="fa fa-close" aria-hidden="true"></i></button></td>
                        </form>
                     @endif
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
@endsection