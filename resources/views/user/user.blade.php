@extends('master.user_dashboard')

@section('title','User Dashboard')
    
@section('content')
    <h3>Hello {{Auth::user()->name}}</h3>
    <h5><i>Welcome to Job App</i></h5><br/><br/>
    <a href="{{route('user_profile.edit',Auth::user()->id)}}" class="btn btn-primary">Edit Profile</a><br/><br/>
    <a href="{{route('user-job')}}" class="btn btn-primary">Apply Job</a><br/><br/>
    <a href="{{route('user-jbs',Auth::user()->id)}}" class="btn btn-primary">My Job Status</a>
    {{-- <a href="{{route('user-pr.edit')}}" class="btn btn-primary">Edit Profile</a> --}}
@endsection