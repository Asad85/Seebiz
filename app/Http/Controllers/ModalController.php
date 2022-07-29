<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ModalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Student::all();
        
        return view('layouts.app')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  dd($request->all());
        // $request-> validate([ 
        //     'fname'=>'required|min:5',
        //     'lname'=>'required|min:5', 
        //     'course'=>'required',
        //     'section'=>'required',
        //  ]);

         $this-> validate($request,[
            'fname'=>'required',
            'lname' => 'required|min:5',
            'course' => 'required',
            'section' => 'required',

           

        ]);
         
         
         $data= new Student();
         $data->fname= $request->fname;
         $data->lname= $request->lname;
         $data->course= $request->course;
         $data->section= $request->section;
         $data->save();
         // return view('pages.index',compact('movie'));      
         return redirect()->route('index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bot = Student::find($id);
        return response()->json(['status'=>true,'data'=>$bot]);
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
         
         
         $data=  Student::find($id);
         $data->fname= $request->fname;
         $data->lname= $request->lname;
         $data->course= $request->course;
         $data->section= $request->section;
         $data->update();
         // return view('pages.index',compact('movie'));      
         return response()->json(['status'=>true,'message'=>'Updated Successfully']);
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::find($id)->delete($id);
        return response()->json(['status'=>true,'message'=>'Deleted Successfully']);
    }
}