@extends('layouts.app')
@section('content')
 

    

<h1>
    Posts
</h1>

 
    <button style = "position:relative; left:980px; " class="ml-auto"><a href="{{ route('create') }}"    class="nav-link px-2 text-black"> Create a Post</button> <br>


    @if (count($posts)>0)
            @foreach ($posts as $post)

                
                          
            <div class="p-3 border bg-light">                          

                                                                    {{-- show the post                 --}}

        <h3><a href="{{url('show/'.$post->id)}}"> {{$post->title}} </a>  </h3>

                    <small> Created at {{$post->created_at}}</small>
                    
                    <div> {{$post->body}} </div>

           
            
            </div>
            <br>

             
        

            @endforeach  
            {{$posts->links()}}

        @else
        <p>No Post Availible</p>

    @endif




@endsection