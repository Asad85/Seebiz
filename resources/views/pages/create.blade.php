@extends('layouts.app')
@section('content')

<div class="wrapperdiv">
    <div class="formcontainer">
        
        <form action="{{route('movies.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
           
            {{-- style="background-color: burlywood " --}}
            
                <div >
                  <h3 style="text-align: center">
                   Add New Movie
                </h3>      
                    </div>
             
                
            
                      
           
            <div class="row">
                <div class="div col-xs-12 col-sm-12 col-md-12">
                <div class="form-group row">
                    <label for="title" class="col-sm-2 col-form-control "> <b>Title</b> </label>
                        <div class="col-sm-10">
                            <input type="text" name="title" id="title" class="form-control">
                        </div>
                </div><br>

                <div class="form-group row">
                    <label for="genre" class="col-sm-2 col-form-control "> <b>Genre</b> </label>
                        <div class="col-sm-10">
                            <select  name="genre" id="genre" class="form-control">
                               
                                <option value="" > Select Genre</option>
                               
                                @if ($genres)
                                @foreach ($genres as $genre)
                                         <option value="{{$genre}}" > {{$genre}}</option>  
                                    @endforeach    
                               @endif
                                
                            </select>
                        </div>
                </div><br>

                <div class="form-group row">
                    <label for="release_year" class="col-sm-2 col-form-control "> <b>Release Year</b> </label>
                        <div class="col-sm-10">
                            <input type="text" name="release_year" id="release_year" class="form-control">
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