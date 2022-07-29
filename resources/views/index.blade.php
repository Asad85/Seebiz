{{-- 

@extends('layouts.app')
@section('content')
<!------ Include the above in your HEAD tag ---------->

<div class="col-md-4 col-md-offset-4" id="login">
    <section id="inner-wrapper" class="login">
        <article>
            <form action="" method="post" >
                @csrf

                {{-- {{$errors}} --}}
                {{-- <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"> </i></span>
                        <input name="name" type="text"   class="form-control" placeholder="Name">
                    
                    </div>
                       
                    @if ($errors->first('name')) 
                      <div class="alert-danger"> {{$errors->first('name')}}</div>
                    @endif

                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                        <input name="email" type="email"   class="form-control" placeholder="Email Address">
                     </div>
                         
                     @if ($errors->first('email')) 
                       <div class="alert-danger"> {{$errors->first('email')}}</div>
                     @endif
                
                
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                        <input name="password" type="password"   class="form-control" placeholder="Password">
                    </div>
                      
                    @if ($errors->first('password')) 
                      <div class="alert-danger"> {{$errors->first('password')}}</div>
                    @endif
               
                  
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                        <input name="password_confirmation" type="password" class="form-control"   placeholder="Confirm Password">
                      </div>

                    @if ($errors->first('password')) 
                      <div class="alert-danger"> {{$errors->first('password')}}</div>
                    @endif

                </div>
                    <button type="submit" class="btn btn-success btn-block">Signup</button>
            
            
                <div class="container signin">
                    <p style="font-size: 15px" >
                        <b>Already have account please</b> &nbsp;&nbsp;&nbsp;&nbsp; 
                        {{-- <a  href="{{route('loginview')}}"> Singin </a> --}}
                    </p>
                </div>        
            
            </form>
        </article>
    </section></div>


@endsection --}}












{{-- 


<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
  
                  <form class="mx-1 mx-md-4">
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="text" id="form3Example1c" class="form-control" />
                        <label class="form-label" for="form3Example1c">Your Name</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="email" id="form3Example3c" class="form-control" />
                        <label class="form-label" for="form3Example3c">Your Email</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4c" class="form-control" />
                        <label class="form-label" for="form3Example4c">Password</label>
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" class="form-control" />
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div>
  
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>
  
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="button" class="btn btn-primary btn-lg">Register</button>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                    class="img-fluid" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  --}} 




  <h1> 
    This is an index page

  </h1>