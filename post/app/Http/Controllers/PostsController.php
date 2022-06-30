<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    
    public function index(){

        // $posts= Post:: orderBy('title', 'desc')->get();
        // return view('post.index')->with('posts', $posts);
//  ->all()
        
        $posts=Post::paginate(3);
        return view('post.index')->withPosts($posts);
    }
    
    
    public function aboutus()

    {
        
        return view('pages.aboutus');
    }
    
    
    public function contact()

    {
        return view('pages.contact');
    }

    
    public function services()

    {
        return view('pages.services');
    }

    

    

    public function create()
    {   
        
        return view('post.create');
    }





    public function store(Request $request)
    {

      
        $posts= new Post;
        $posts->title = $request->title;
        $posts->body  = $request->body;
        $posts->save();
        
        return redirect('index');

    }


    public function show( $id)
    {
    
        $post= Post::find($id);
        return view('post.show')->withPost( $post);
        
    }


    public function edit( Request $request, $id)
    {
        $post=  Post:: find($id);
        return view('post.edit') -> with ('post', $post);
    }


    public function update(Request $request, $id)
    {
        $posts= Post:: find ($id);
        $posts->title = $request->title;
        $posts->body  = $request->body;
        $posts->save();
        
        return redirect('index');
    }


    public function destroy($id)
    {
      
        $posts= Post::find($id);
        $posts->delete();
        return redirect('index');
    }
}
