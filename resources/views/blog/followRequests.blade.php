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
<p> 
    @if($request->status==0)
    <form action="{{ route('followBack')}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="sent_by" value="{{$request->sent_by}}">
    <input type="hidden" name="action" value="accept"> <!-- Hidden input for accept action -->
    <div class="read_bt"><input type="submit" value="Accept"></div>
</form>
<form action="{{ route('followBack')}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="sent_by" value="{{$request->sent_by}}">
    <input type="hidden" name="action" value="reject"> <!-- Hidden input for reject action -->
    <div class="read_bt"><input type="submit" value="Reject"></div>
</form>
@else

<form action="{{ route('followBack')}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="sent_by" value="{{$request->sent_by}}">
    <input type="hidden" name="action" value="followback"> <!-- Hidden input for accept action -->
    <div class="read_bt"><input type="submit" value="Follow back"></div>
</form>
<form action="{{ route('followBack')}}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="sent_by" value="{{$request->sent_by}}">
    <input type="hidden" name="action" value="reject"> <!-- Hidden input for reject action -->
    <div class="read_bt"><input type="submit" value="Reject"></div>
</form>
@endif


</p>
</div>
@endforeach
</div>




@endsection