@extends('master.master')

@section('title','Job to Apply')

@section('content')
<h1>Available Job List(s) for <strong>YOU</strong></h1>
<a href="{{route('user-home')}}"class="btn btn-primary">Back</a>
@foreach ($jobs as $job)
    <br>
    <h4>{!!$job->job_name!!}</h4>
    <p>{!!str_limit($job->details,100)!!}</p>
    <a href="{{route('user-jb',$job->id)}}"class="btn btn-primary">Read More</a>
@endforeach  
@endsection