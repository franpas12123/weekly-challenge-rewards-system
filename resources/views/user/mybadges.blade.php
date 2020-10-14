@extends('../layouts/layout')

@section('content')
   <div class="container mb-4">
      <img src="{{ asset('img/black_kind_header.jpg') }}" class="img-fluid" alt="">
   </div>

   <div class="d-flex justify-content-center mt-5">
      <table class="table table-light col-sm-10 col-md-8 col-lg-6">
         <thead class="thead-dark">
            <tr>
               <th scope="col">Name</th>
               <th scope="col">{{ Auth::user()->name }}</th>
            </tr>
            </thead>
            <tbody>
               @foreach ($challenges as $challenge)
                  <tr>
                     <td scope="row">{{ $challenge->name }}</td>
                     @guest
                        <td>{{ $challenge->points }}</td>
                     @endguest
                  </tr>
               @endforeach
               <tr>
                  <td>Level</td>
                  
               </tr>
            </tbody>
      </table>
   </div>
@endsection