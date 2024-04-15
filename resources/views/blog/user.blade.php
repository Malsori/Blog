@extends('blog.master')
@section('title','User page')
    

@section('content')
<div id="center">

   
         @foreach($products as $item)
         @if($item->status=='1')
         <form action="{{ route('follow')}}" method="POST">
            @csrf
         {{-- @method('PUT') --}}
        
         <input type="hidden" name="created_by" value="{{$item->created_by}}"></a></div>
         <div class="read_bt"><input type="submit" value="Follow"></div>
         {{-- <div class="form-group">
            <label for="status">Follow</label>
            <input type="checkbox" class="form-control"  id="status" name="created_by" value="1" @if(old('name') == 1) checked @endif>
          </div> --}}
        </form>
         <div class="col-lg-8 col-sm-12">
            <div class="about_img" ><img src="{{ asset('uploads/'.$item->image)}}" style="width:500px;height:500px;margin-top:20px;object-fit:contain"></div>
            
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
                     </form>
                     
                  </ul>
                  
               </div>
               <hr>
               {{-- <div class="read_bt"><a href="#">Read More</a></div> --}}
            </div>
         </div>
        
       
        @endif
         @endforeach
        
         
         
         
         

         <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      </div>

@endsection