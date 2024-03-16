@extends('blog.admin.master')

@section('title','View Products')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header ">
            <h4>View Products
                <a href="{{ route('add-products') }}" class="btn btn-primary btn-sm float-end">Add Products</a>
            </h4>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif  
            <table class="table table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th> 
                    <th>Slug</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            <img src="{{ asset('uploads/'.$item->image) }}" alt="img" style="width:100px;height:50px">
                        </td>
                        <td>{{ $item->status == '1' ? 'Show':'Hidden' }}</td>
                        <td>
                            <a href="{{ url('admin/edit-products/'.$item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        {{-- <td>
                            <a href="{{ url('admin/delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td> --}}
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>




@endsection