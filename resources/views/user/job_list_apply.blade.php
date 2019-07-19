@extends('master.master')

@section('title','Job to Apply')

@section('content')
<h1>Available Job List(s) for <strong>YOU</strong></h1>
<a href="{{route('user-home')}}"class="btn btn-primary">Back</a><br/>
@foreach ($jobs as $job)
    <br>
    <h4>{!!$job->company_name!!}</h4>
    <h4>{!!$job->company_address!!}</h4>
    <p>{!!str_limit($job->job_name,10)!!}</p>
    <a href="{{route('user-jb',$job->id)}}"class="btn btn-primary">Read More</a><br/>
@endforeach  
@endsection