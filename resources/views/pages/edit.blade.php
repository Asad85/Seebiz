@extends('layouts.app')
@section('content')





<h3 style="text-align: center "> Edit Your Movie </h3>
<div class="wrapperdiv">
    <div class="formcontainer">
        
        <div class="" style="">
            <a href="{{ route('movies.index') }}" class="btn btn-dark" style="margin-top: -73px; margin-left: -61px;">  Back </a>
        </div>
         
        <form action="{{route('movies.update', $movie->id)}}" method="POST"  enctype="multipart/form-data">
            @csrf
            @method('PUT')
           
          
            <div class="row">
                <div class="div col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-control "> <b>Title</b> </label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" value="{{$movie->title}}" class="form-control">
                        </div>
                </div><br>

                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-control "> <b>Genre</b> </label>
                        <div class="col-sm-10">
                            <select  name="genre" id="genre" value="{{$movie->genre}}" class="form-control">
                               
                                <option value="" > Select Genre</option>
                               
                                @if ($genres)
                                     @foreach ($genres as $genre)
                                        @if($genre==$movie->genre)
                                             <option value="{{$genre}}" selected > {{$genre}}</option>  
                                         @else
                                            <option value="{{$genre}}"  > {{$genre}}</option>  
                                         @endif
                                    @endforeach    
                               @endif
                                
                            </select>
                        </div>
                </div><br>


                <div class="form-group row">
                    <label for="release_year" class="col-sm-2 col-form-control "> <b>Release Year</b> </label>
                        <div class="col-sm-10">
                            <input type="text" name="release_year" id="release_year" value="{{$movie->release_year}}" class="form-control">
                        </div>
                </div><br>

{{-- Define what is poster --}}
                <div class="form-group row">
                    <label for="poster" class="col-sm-2 col-form-control "> <b>Poster</b> </label>
                        <div class="col-sm-10">
                            <input type="file" name="poster" id="poster" class="form-control-file">
                        </div>
                </div><br>

                <div class="col-md-10">  
                <button type="submit" class="btn btn-dark"> Save </button>
                </div>
            </div>
        
        </form>
    
    </div>
</div> 

@endsection