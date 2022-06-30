@extends('layouts.app')
@section('content')
 
<h1 style= "text-align: center"> Edit Post </h1> <br>

<a href="{{url('index/')}}" class=" btn btn-dark"> Go Back </a> <br><br> 
 {{-- comment file <a href="{{url('pages.services')}}">  </a> --}}
    


<form action="{{route('update-post',$post->id)}}" method="POST">

    @csrf
    
                <div>
                    <label for="name"> <b>Title: </b> </label>
                    <input type="text" name="title"  class="form-control"  required="required" value="{{$post->title}}">
                </div> 
    <br>
                <div>
                    <label for="name"> <b>Body:</b> 
                        <small> 
                            Written on {{ $post->created_at }}
                        </small>
                   </label>
                    <textarea name="body" id="article-ckeditor" class="form-control"  required="required" value="">{{$post->body}}</textarea>
                </div>
    
                <br><br><br>

                <button class="btn btn-primary  " type="submit" onclick="myFunction()">Save Changes</button>
            
            
{{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </a>
             --}}
</form>


<hr> 
 {{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </a> --}}

@endsection 