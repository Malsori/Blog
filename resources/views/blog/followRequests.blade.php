@extends('blog.master')
@section('title','Blog page')
    

@section('content')
<div id="center">
<div class="user">
<p>Name</p>
<p>Email</p>
<p>Username</p>
<p>Accept</p>
<p>Reject</p>
</div>
@foreach($requests as $request)

<div class="user">
<p><a href="{{ url('user/userProducts/'.$request->creator->id) }}">{{ $request->creator->name }}</a></p>
<p>{{ $request->creator->email }}</p>
<p>{{ $request->creator->username }}</p>
<p>{{ $request->creator->username }}</p>
<p><form action="{{ route('follow')}}" method="POST">
    @csrf
    <input type="hidden" name="sent_to" value="{{$request->sent_to}}">
    <div class="read_bt"><input type="submit" value="Accept"></div>
    <div class="read_bt"><input type="submit" value="Reject"></div>

</p>
</div>
@endforeach
</div>




@endsection