@extends('layouts.layout')

@section('content')
   <h1>Challenges Page</h1>
   <p>{{ session('msg') }}</p>
   @foreach ($challenges as $challenge)
      <p>{{ $challenge->id }} - {{ $challenge->name }}</p>
   @endforeach
@endsection