@extends('master.master')

@section('title','User Dashboard')
    
@section('content')
    <h1>User Dashboard</h1>
    <h3>Welcome {{Auth::user()->name}}</h3>
@endsection