@extends('blog.master')
@section('title','Blog page')
    

@section('content')
@foreach($users as $user)

<p>Name:{{ $user->name }}</p>
<p>Email:{{ $user->email }}</p>
<p>Username:{{ $user->username }}</p>

@endforeach





@endsection