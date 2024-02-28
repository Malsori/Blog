<div class="header_section">
    <div class="container-fluid header_main">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="logo" href="index.html"><img src="{{ asset('assets/images/logo.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                   <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('blog')}}">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('features')}}">Features</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                </li>
                <li class="nav-item">
                  @if (Auth::check())
                  <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> 
                  
                  {{ __('Log out') }} 
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                   @csrf
               </form>
               </a>

               @else
               <a class="nav-link" href="{{route('login')}}">Login</a> 
                  @endif 
                  
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="#"><img src="{{ asset('assets/images/serach-icon.png')}}"></a>
                </li>
             </ul>
          </div>
       </nav>
    </div>