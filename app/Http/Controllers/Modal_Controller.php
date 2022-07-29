<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Student;

class Modal_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('layouts.app');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //     //  dd($request->all());
    //      $request-> validate([ 
    //     'fname'=>'required',
    //     'lname'=>'required', 
    //     'course'=>'required',
    //     'section'=>'required',
    //  ]);
     
    //     echo" sajkdhaskljdklasjdklj";
    //  $data= new Student();
    //  $data->fname= $request->fname;
    //  $data->lname= $request->lname;
    //  $data->course= $request->course;
    //  $data->section= $request->section;
    //  $data->save();
    //  // return view('pages.index',compact('movie'));      
    //  return redirect()->route('index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}



