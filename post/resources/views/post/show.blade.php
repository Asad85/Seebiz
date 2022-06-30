

 @extends('layouts.app')
@section('content')
 


<a href="{{url('index/')}}" class="btn btn-dark"> Go Back </a> <br><br>


<h1>
   {{$post->title}}
   
</h1>

<small> Written on {{ $post->created_at }} </small>
<br>
<br>
<hr>

    <div>
        {{$post->body}} 
    </div>
   
<hr>



   <div class="d-flex justify-content-end"> 

    
        <a href="{{url('edit/'.$post->id)}}"  class="btn btn-dark height: 40px; width: 102px; margin-top: 7px;" style="    margin-right: 20px;" >
   
            Edit a Post
        </a>    
  

    <form action="{{ route('delete-post', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Delete</button>
      </form>


    {{-- <form method="post" class="delete_form" action="{{url('delete/'.$post->id) }}"> --}}

        {{-- ==================================================================================== --}}
      
  {{-- <form action="{{ action('delete-post'.$post->id) }}" method="POST">

    @csrf

        
  <button type="submit" class="btn btn-danger"> Delete a Post</button>
        </form> --}}

  {{-- ==================================================================================== --}}



       {{-- <a href="{{url('delete/'.$post->id)}}" class="btn btn-danger ; d-flex align-items-center " > 
        
            Delete a Post
        
        </a> --}}
    
</div>


@endsection 



