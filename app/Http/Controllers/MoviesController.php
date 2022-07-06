<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        {
            $movies = Movie::all();
            //  $movies = Movie::paginate(3);
            return view('pages.index')->withmovies( $movies);
        
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $genres= ['Comedy', 'Action', 'Horror', 'Biopic','Drama'];
            return view ('pages.create', compact('genres'));
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
        {
            // dd($request->all());
            $request-> validate([ 'title'=>'required',
            'genre'=>'required', 
            'poster'=>'required|mimes:jpge,png,jpg,gif,|max:2048',
            'release_year'=>'required'
        ]);
        $image= " ";
        if ($request->poster){
            $image= time().'.'.$request->poster->extension();
            $request->poster->move(public_path('uploads'),$image);
        }
        $data= new Movie;
        $data->title= $request->title;
        $data->genre= $request->genre;
        $data->release_year= $request->release_year;
        $data->poster= $image;
      $movies=  $data->save();
        // return view('pages.index',compact('movie'));      
        return redirect()->route('movies.index');  
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $mogindara
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie  )
        {
            
            return view('pages.show')->withmovies( $movie);
          
        }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie )
        {
             $genres= ['Comedy', 'Action', 'Horror', 'Biopic','Drama'];
            // return view('pages.edit')->withmovies ($movie);
            return view('pages.edit', compact('movie', 'genres'));
        
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
        {
            $image= " ";
            if ($request->poster){
                $image= time().'.'.$request->poster->extension();
                $request->poster->move(public_path('uploads'),$image);
           
                $movie->poster = $image;

         }

            
                $movie->title= $request->title;
                $movie->genre= $request->genre;
                $movie->release_year= $request->release_year;
                $movie->update();
                 
                return redirect()->route('movies.index') ;
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $movie= Movie::FindOrFail($id);
        $movie->delete();
        return redirect()->route('movies.index');

        
    }
}
