@extends('blog.master')
@section('title','Contact page')
@section('content')
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">1</li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">2</li>
                  <li data-target="#carouselEx\ampleIndicators" data-slide-to="2"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">3</li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="3"style="text-indent: 0; border: none; color: #000; font-size: 18px; text-align: center;">4</li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="contact_img"></div>
                  </div>
                  <div class="carousel-item">
                     <div class="contact_img"></div>
                  </div>
                  <div class="carousel-item">
                     <div class="contact_img"></div>
                  </div>
                  <div class="carousel-item">
                     <div class="contact_img"></div>
                  </div>
               </div>
            </div>
         </div>
         @if ($message = Session::get('success'))
            <div class="alert alert-success  alert-dismissible">
               <strong>{{ $message }}</strong>
            </div>
         @endif
         
         @if ($message = Session::get('error'))
            <div class="alert alert-danger  alert-dismissible">
               <strong>{{ $message }}</strong>
            </div>
         @endif
         <div class="col-md-6">
            <form method="POST" action="{{route('sendMail')}}" class="mail_section" enctype="multipart/form-data">
               @csrf
               <h1 class="contact_taital">Contact us</h1>
               <input type="text" class="email_text" placeholder="Name" name="Name">
               <input type="text" class="email_text" placeholder="Phone" name="Phone">
               <input type="email" class="email_text" placeholder="Email" name="Email">
               <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
               <div class="send_bt"><input type="submit" name="submit"></div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection