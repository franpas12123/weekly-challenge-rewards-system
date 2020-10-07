@extends('layouts.layout')

@section('content')
   <h1>Add a new challenge</h1>
   <form action="/challenges" method="post">
      @csrf
      <label for="name">Challenge Name</label>
      <input type="text" name="name" id="name">
      
      <label for="points">Points Earned</label>
      <input type="number" name="points" id="points">
      <button type="submit" class="btn btn-primary">Submit</button>
   </form>     
@endsection