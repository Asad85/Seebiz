<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel= "stylesheet"  href="{{asset('css/custom.css')}}" >
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       
    <body>
        
        @Include('inc.nav')  
        
{{-- 
        <div> 
                <a href="{{url( 'register/')}}"> Login </a>
                <a href="{{url('register/')}}"> Login </a> <br><br>


            <a class="btn btn-dark" href="{{ url('index') }}">Register</a>        [] copy these into inc.nav ]
            <a class="btn btn-dark" href="{{ url('login') }}">login</a>
        </div> --}}


        <div class="flex-center position-ref full-height">

                                    {{-- @if (Route::has('login'))
                                        <div class="top-right links">
                                            @auth
                                                <a href="{{ url('/home') }}">Home</a>
                                            @else
                                                <a href="{{ route('login') }}">Login</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif  --}}

        
        @yield('content')
            
           
            </div>
        </div>
    </body>
</html>
