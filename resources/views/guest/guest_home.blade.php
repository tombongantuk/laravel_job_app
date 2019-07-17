@extends('master.master')

@section('title','Guest')
    
@section('content')
    <h1>Welcome To Fast Job.com</h1>
    <h5><i>We are part of your future</i></h5>
    <br/>
    <h5><i>Available Job</i></h5>
    <small><i>*please login or register to see more detail</i></small>
    <br/>
    @include('guest.guest_job_list')
@endsection