@extends('blog.master')
@section('title','Blog page')
    

@section('content')


<div class="wrapper">
   <!-- Sidebar  -->

           <div class="container-fluid">

               <button type="button" id="sidebarCollapse" class="btn btn-info">
                   <i class="fas fa-align-left"></i>
                   <span>Toggle</span>
               </button>
               <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                   <i class="fas fa-align-justify"></i>
               </button>

             
           </div>
      
   <nav id="sidebar">
       <div class="sidebar-header">
     
       </div>

       <ul class="list-unstyled components">
           <p>Dummy Heading</p>
           
       

           

           <li class="active">
               <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
               <ul class="collapse list-unstyled" id="homeSubmenu">
                   <li>
                       <a href="{{route('requests')}}">Follow requests</a>
                   </li>
                   <li>
                       <a href="#">Home 2</a>
                   </li>
                   <li>
                       <a href="#">Home 3</a>
                   </li>
               </ul>
           </li>
           <li>
               <a href="#">About</a>
           </li>
           <li>
               <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
               <ul class="collapse list-unstyled" id="pageSubmenu">
                   <li>
                       <a href="#">Page 1</a>
                   </li>
                   <li>
                       <a href="#">Page 2</a>
                   </li>
                   <li>
                       <a href="#">Page 3</a>
                   </li>
               </ul>
           </li>
           <li>
               <a href="#">Portfolio</a>
           </li>
           <li>
               <a href="#">Contact</a>
           </li>
       </ul>

       <ul class="list-unstyled CTAs">
           <li>
               <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
           </li>
           <li>
               <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
           </li>
       </ul>
   </nav>

   <!-- Page Content  -->
   <div id="content" style="border:1px solid red;">

       

       <div id="posts">
         @foreach($products as $item)
         @if($item->status=='1')
         
         <div class="col-lg-8 col-sm-12">
            <div class="about_img" style="object-fit: contain"><img src="{{ asset('uploads/'.$item->image)}}" style="width:500px;height:500px;margin-top:20px;object-fit:contain"></div>
            
            <p class="post_text">{{ $item->price }}</p>
            <h2 class="most_text">{{ $item->name }}</h2>
            <p class="lorem_text">{{ $item->description }}</p>
            <p class="post_text">Posted by:{{ $item->creator->username }}</p>
            <div class="social_icon_main">
               <div class="social_icon">
                  <ul>
                     <form>
                     <li><ion-icon name="heart-outline" ></ion-icon></li>
                     <li><ion-icon name="chatbox-outline"></ion-icon></li>
                     <li><ion-icon name="bookmark-outline"></ion-icon></li>
                     <div class="read_bt"><a href="{{ url('user/edit-products/'.$item->id) }}" >Edit</a></div>
                     <div class="read_bt"><a href="{{ url('user/delete-products/'.$item->id) }}" onclick="return confirm('Are you sure you want to delete this post!');" >Delete</a></div>
                  </form>
                  </ul>
                  
               </div>
               
            </div>
         </div>
         {{-- <div class="col-lg-4 col-sm-12">
            <div class="about_main">
               <h1 class="follow_text">CONNECT & FOLLOW</h1>
               <div class="follow_icon">
                  <ul>
                     <li><a href="#"><img src="{{ asset('assets/images/fb-icon-1.png')}}"></a></li>
                     <li><a href="#"><img src="{{ asset('assets/images/twitter-icon-1.png')}}"></a></li>
                     <li><a href="#"><img src="{{ asset('assets/images/linkedin-icon-1.png')}}"></a></li>
                     <li><a href="#"><img src="{{ asset('assets/images/instagram-icon-1.png')}}"></a></li>
                  </ul>
               </div>
            </div>
         </div> --}}
         <hr>
       
       
        @endif
         @endforeach
        
   </div>
</div>

       
         
         
         
         

         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  
</div>
@endsection