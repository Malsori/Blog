@extends('blog.master')

@section('title','Edit Post')

@section('content')


    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic form elements</h4>
        <p class="card-description"> Basic form elements </p>
        <form class="forms-sample" action="{{url('user/update-products/'.$products->id)}}" method="POST" enctype="multipart/form-data">
         @csrf
         @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name" value="{{$products->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Slug</label>
            <input type="text" class="form-control" name="slug" id="exampleInputEmail3" placeholder="Slug" value="{{$products->slug}}">
          </div>
       
        
          <div class="form-group">
            <label>File upload</label>
            {{-- <input type="file" name="img[]" class="file-upload-default"> --}}
            <div class="input-group col-xs-12">
              <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
              <span class="input-group-append">
                <input type="file" class="file-upload-browse btn btn-primary" name="image" type="button">
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputCity1">Price</label>
            <input type="text" class="form-control" name="price" id="exampleInputCity1" placeholder="Price" value="{{$products->price}}">
          </div>
         
          <div class="form-group">
            <label for="exampleTextarea1">Textarea</label>
            <textarea class="form-control" id="exampleTextarea1" name="description" rows="4">{{$products->description}}</textarea>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
          <button class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
 



@endsection