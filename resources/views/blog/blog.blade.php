@extends('blog.master')
@section('title','Blog page')
    

@section('content')
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         
         @foreach($products as $item)
         @if($item->status=='0')
         <p>No products</p>
         @else
         <div class="col-lg-8 col-sm-12">
            <div class="about_img" style="object-fit: contain"><img src="{{ asset('uploads/'.$item->image)}}" style="width:500px;margin-top:20px;object-fit:contain"></div>
            
            <p class="post_text">{{ $item->price }}</p>
            <h2 class="most_text">{{ $item->name }}</h2>
            <p class="lorem_text">{{ $item->description }}</p>
            <div class="social_icon_main">
               <div class="social_icon">
                  <ul>
                     <form>
                     <li><ion-icon name="heart-outline" ></ion-icon></li>
                     <li><ion-icon name="chatbox-outline"></ion-icon></li>
                     <li><ion-icon name="bookmark-outline"></ion-icon></li>
                     </form>
                  </ul>
               </div>
               <div class="read_bt"><a href="#">Read More</a></div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12">
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
         </div>
         
       
       
        @endif
         @endforeach
        
         
         
         
         

         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      </div>
   </div>
</div>
@endsection