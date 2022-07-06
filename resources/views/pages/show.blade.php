@extends('layouts.app')
@section('content')

    
<div class="wrapperdiv">
    <div class="formcontainer">
<div class="" style="">
            <a href="{{ route('movies.index') }}" class="btn btn-dark" style="margin-top: -73px; margin-left: -61px;">  Back </a>
</div>

        <div class="card " style=" width: 113%; ">
            <img src="{{ asset('uploads/'. $movies->poster)}}" class="card-img-top">

            <div class="card-body">
                <h5 class="card-title"> {{ $movies->title}} </h5>
                <p class="card-text">   {{ $movies->genre }} | {{$movies->release_year}} </p>
                    <div style=" margin-left: 112px;">
                        
                        <a href="https://www.1377x.to/torrent/5221551/The-Batman-2022-1080p-WEBRip-DDP5-1-x264-NOGRP/" class="btn btn-primary">
                                                    Click to Download</a>
                    </div>
            </div>
        </div>

        <div class="text_area">
            <p class="textp"> 
                In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects 
                to his own family while facing a serial killer known as the Riddle. In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects 
                to his own family while facing a serial killer known as the Riddle. 
            </p>

        </div>


    </div> 
<hr>
    <div class="" style=" position: absolute;margin-top: -87px; margin-left: 905px;"> 

            {{-- Error inserted . except of , view not shown --}}
            <a href="{{route('movies.edit' , $movies->id)}}"  class="btn btn-dark " style="" >        
        
                    Edit a Post
                    
            </a>    
        
            <form action="{{ route('movies.destroy', $movies->id)}}" method="post" style="position: absolute; margin-top: -37px; margin-left: 144px; " >
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>

    </div>


</div>






@endsection