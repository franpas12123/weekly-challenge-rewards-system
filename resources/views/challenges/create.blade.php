@extends('layouts.layout')

@section('content')
   <div class="col-lg-4 mx-auto">
      <h1>Add a new challenge</h1>
      <form action="/challenges" method="post">
         @csrf
         <div class="form-group">
            <label for="name">Challenge Name</label>
            <input type="text" class="form-control" name="name" id="name">
         </div>
         
         <div class="form-group">
            <label for="points">Earnable Points</label>
            <input type="number" class="form-control col-lg-3 mx-auto" name="points" id="points">
         </div>
         <button type="submit" class="btn btn-primary mt-2">Submit</button>
      </form>     
   </div>
@endsection