<?php


// namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// build in 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use Hash;
use App\Auths;

// namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
// use Session;
// use App\Auths;
// use Hash;

class AuthController extends Controller
{
    // use AuthenticatesUsers;

    public function home(){
     
        return view('pages.index');

    }
    
//-------------------------------------- registration view
    
    public function registerview(){

        return view('pages.register');

    }

//-------------------------------------- registration page




public function register( Request $request){

    // $this->validate($request, [
    //     'name' => 'required|min:3|max:50',
    //     'email' => 'email',
    //     'password' => 'min:3|required_with:password_confirmation|same:password_confirmation',
    //     'password_confirmation' => 'min:3'
    //     ]);

   
    $this-> validate($request,[
            'name'=>'required',
            'email' => 'required',
            'password' => 'min:5|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:5',

           

        ]);
       
       $var = new Auths;
       $var->name = $request->name;
       $var->email = $request->email;
       $var->password = Hash::make($request->password);
    //    $var->password = $request->password;
       $var->save();
    //    dd($var);
       return redirect('home');

    // return view('pages.welcome');
    }



//-------------------------------------- login view

    public function loginview(){
     
        return view('pages.login');

    }

   


  //-------------------------------------- login 

    // protected function login(Request $request){
        

    //     $email= $request->email;
    //     $password=$request->password;
    //     $data = Auths::all();
    //     // $data=$email;
    //     // $data2=$password;
    //     // dd($request);
    //         // if(Auth::attempt([ 'email'=>$email,  'password'=>$password ])){
    //         if(Auth::attempt([$email => $data-> email, $password => $data->password])){
    //             // dd(Auth::attempt);
    //             echo "you are logged in ";

    //         // return redirect('loginview')->with('messege' ,'you are logged in');
    //     }else{
    //         // return redirect('login')->with('messege', 'Please try again');
    //         echo"got an error";
    //     }
        
    //     return view('pages.login');

    // }



    
  


    protected function login(Request $request)
    {

        $this-> validate($request,[
           
            'email' => 'required',
            'password' => 'min:5|required_with:password_confirmation|same:password_confirmation',
           

        ]);


        $tobematched = new Auths;

        $tobematched->email = $request->email;
        $var1 = $tobematched->email;

        $tobematched->password = $request->password;
        $pass = $tobematched->password;
        $data = Auths::all();
        $counter = 0;
     
        foreach ($data as $mydata) {
            $var2 = $mydata->email;
            $var3 = $mydata->password;
             
            if ($var2 === $var1 && Hash::check ($pass , $var3 )) {
                $counter ++;
                return redirect('home') ->withSuccess('You have Successfully logged in.....!');
                // echo "Success You are logged in..!";
            }  
        }
        
        if ($counter ==0){
            
             
            echo "Your Password didn't match ";
            // return redirect('loginview');
            // return ("login failed");
          

        }
       

   //-------------------------------------------------------------------------------Login Condition

    // public function login(Request $request)
    // { 
    //     // dd($request->all());
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
        
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //     // dd($credentials);

    //     echo "Yahoooooooo";

    //         // return redirect()->intended('dashboard')
    //         //             ->withSuccess('You have Successfully loggedin');
    //     }
  
    //     // return redirect("login")->withSuccess('
    //    echo "Oppes! You have entered invalid credentials";
        
    //     // ');
       
    // }




    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required',
    //     ]);
   
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         return redirect('login')
    //                     ->withSuccess('You have Successfully loggedin');
    //     }
  
    //     return redirect('register')->withSuccess('Oppes! You have entered invalid credentials');
    // }




    // public function login(Request $request)
    // {
    //    $credentials = array(
    //         'email' => $request->get('email'),
    //         'password' => $request->get('password'),
            
    //     );

    //     if (Auth::attempt($credentials)) 
    //     {
    //         return redirect()->intended('dashboard');
    //     }
    //     else
    //     {
    //         echo "Wrong Credentials";
    //     }
    // }
}
}