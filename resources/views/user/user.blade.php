@extends('master.master')

@section('title','User Dashboard')
    
@section('content')
    <h1>User Dashboard</h1>
    <h3>Welcome {{Auth::user()->name}}</h3>
    <a href="{{route('user-pr.create')}}" class="btn btn-primary">Manage Profile</a>
    {{-- <a href="{{route('user-pr.edit')}}" class="btn btn-primary">Edit Profile</a> --}}
@endsection