<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
         
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          
          <li><a href="{{ url('home') }}"       class="nav-link px-2 text-secondary">BeeZ</a></li>
{{-- if you give route thn in route pass a parameter ->name('service'); after controller--}}
          <li><a href="{{ route('service') }}"    class="nav-link px-2 text-white"> Services</a></li>
          <li><a href="{{ url('aboutus') }}"    class="nav-link px-2 text-white"> About Us</a></li>
          <li><a href="{{ route('contact') }}"    class="nav-link px-2 text-white"> Contact</a></li>
       
         
        </ul>
       

       
        
        
        
        
        </div>
      </div>
    </div>
  </header>