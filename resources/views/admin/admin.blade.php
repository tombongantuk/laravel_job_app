@extends('master.master')

@section('title','Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <h3>Welcome {{Auth::user()->name}}</h3>
    <a href="{{route('admin-jb.index')}}"class="btn btn-primary">Manage Job</a>    
@endsection