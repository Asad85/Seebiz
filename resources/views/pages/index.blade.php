
@extends('layouts.app') 
@section('content')




<table class="table">
    <thead>
      <tr>
        <th scope="col">Poster</th>
        <th scope="col">Title</th>
        <th scope="col">Genre</th>
        <th scope="col">Release Year</th>
        <th>action</th>
      </tr>
    </thead>
  
    
    <tbody>
      @foreach($movies as $movie)
      <tr>
        <th class="align-middle"> <img src="{{ asset('uploads/'. $movie->poster)}}" class="img-thumbnail" /></th>
        <td class="align-middle">{{$movie->title}}</td>
        <td class="align-middle">{{$movie->genre}}</td>
        <td class="align-middle">{{$movie->release_year}}</td>
        <td> <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-info" style="margin-top: 43px;"> Show</a></td>
      </tr>
      @endforeach

          {{-- {!! $movies->links () !!} --}}

           
       
     
    </tbody>
  </table>

@endsection 


