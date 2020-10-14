@extends('layouts.layout')

@section('content')
   <div class="container mb-4">
      <img src="{{ asset('img/black_kind_challenges.jpg') }}" class="img-fluid" alt="">
   </div>
   <div class="d-flex justify-content-center">
      <table class="table table-light col-sm-10 col-md-8 col-lg-6">
         <thead class="thead-dark">
            <tr>
               {{-- <th scope="col">#</th> --}}
               @auth
                  <th scope="col">Status</th>
               @endauth
                  <th scope="col">Name</th>
               @guest
                  <th scope="col">Points</th>
               @endguest
               @auth
                  <th scope="col">Remarks</th>
                  <th scope="col">Action</th>
               @endauth
            </tr>
            </thead>
            <tbody>
               @foreach ($challenges as $challenge)
                  <tr>
                     @auth
                        @if ($challenges_status[$challenge->id - 1]['completed'] == 1)
                           <td>Completed</td>
                        @else
                           <td>Incomplete</td>
                        @endif
                     @endauth
                     <td scope="row">{{ $challenge->name }}</td>
                     @guest
                        <td>{{ $challenge->points }}</td>
                     @endguest
                     
                     @auth
                        <td> {{$challenges_status[$challenge->id - 1]['status']}}</td>
                     @endauth

                     @auth
                        @if ($challenges_status[$challenge->id - 1]['completed'] == 0)
                        {{-- cha: {{ $challenge->id}} --}}
                        <form action="{{ route('userchallenges.update', ['user_id' => Auth::id(), 'challenge_id' => $challenge->id]) }}" method="post">
                           @csrf
                           {{-- <input type="hidden" name="challenge-id" value="{{ $challenge->id }}"> --}}
                           <td><button type="submit" name="button" id="" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i></button></td>
                        </form>
                        @else
                           <td>Complete</td>
                        @endif
                     @endauth
                  </tr>
               @endforeach
            </tbody>
      </table>
   </div>
   @if(Auth::id() == 1)
      <a class="btn btn-primary" href="{{ route('challenges.create') }}">Add New Challenges</a>
   @endif
@endsection