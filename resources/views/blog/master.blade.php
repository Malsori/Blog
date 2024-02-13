<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>@yield('title')</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
    @include('blog.includes.style')
    
    
   </head>
   <body>
    @include('blog.includes.navbar')
      <!-- header section start -->
   
         <!-- banner section start --> 
         <div class="container-fluid">
            <div class="banner_section layout_padding">
               <h1 class="banner_taital">welcome <br>our blog</h1>
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="image_main">
                           <div class="container">
                              <img src="{{ asset('assets/images/img-1.png')}}" class="image_1">
                              <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="image_main">
                           <div class="container">
                              <img src="{{ asset('assets/images/img-1.png')}}" class="image_1">
                              <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="image_main">
                           <div class="container">
                              <img src="{{ asset('assets/images/img-1.png')}}" class="image_1">
                              <div class="contact_bt"><a href="contact.html">Contact Us</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end --> 
      </div>
      <!-- header section end --> 
      {{-- <div class="container">
         <div class="touch_setion">
            <div class="box_main">
               <div class="image_2 active">
                  <h4 class="who_text active">Who am i</h4>
               </div>
            </div>
            <div class="box_main">
               <div class="image_3">
                  <h4 class="who_text">Get In Touch</h4>
               </div>
            </div>
            <div class="box_main">
               <div class="image_4">
                  <h4 class="who_text">Facebook</h4>
               </div>
            </div>
         </div>
      </div> --}}
  
      @yield('content')
      <!-- tag section end -->
      <!-- contact section start -->
    
      <!-- contact section end -->
      <!-- footer section start -->
    @include('blog.includes.footer')
      <!-- copyright section end -->
      <!-- Javascript files-->
      @include('blog.includes.scripts')
     
   </body>
</html>