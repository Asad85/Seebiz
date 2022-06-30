
@extends('layouts.app')
@section('content')
 

    

<h1>
    Create Your Post
</h1>


<form action="{{ action('PostsController@store') }}" method="POST">

    @csrf

                <div>
                    <label for="name"> Title: </label>
                    <input type="text" name="title"  class="form-control"  required="required" placeholder="Enter your Title" />
                </div> 
    
                <div>
                    <label for="name"> Body:  </label>
                    <textarea name="body" id="article-ckeditor" class="form-control"  required="required" placeholder="Enter your text" ></textarea>
                </div>
    
                    <br>
                <button type="submit" onclick="myFunction()">Submit</button>
            
            
{{-- <a href="/posts/{{$post->id}}/edit" class="btn btn-default"> Edit </a>
             --}}
</form>
        




@endsection

