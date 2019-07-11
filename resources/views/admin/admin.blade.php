@extends('master.master')

@section('title','Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <h3>Welcome {{Auth::user()->name}}</h3>    
@endsection