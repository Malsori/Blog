@extends('blog.master')
@section('title','Blog page')
    

@section('content')
<div id="center">
<div class="user">
<p>Name</p>
<p>Email</p>
<p>Username</p>
</div>
@foreach($users as $user)

<div class="user">
<p><a href="{{ url('user/user/'.$user->id) }}">{{ $user->name }}</a></p>
<p>{{ $user->email }}</p>
<p>{{ $user->username }}</p>
</div>
@endforeach
</div>




@endsection