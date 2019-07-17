@extends('master.master')

@section('title','Job Status')

@section('content')
<h1>Applied Job(s)</h1>
<a href="{{route('user-home')}}"class="btn btn-primary">Back</a><br>
@foreach ($job_status as $status)
    {{$status->job_name}}<br>
    @if(($status->pivot->status)==='accept')
       {!!'accepted'!!} <br>
    @elseif(($status->pivot->status)==='reject')
        {!!'rejected'!!} <br>
    @else 
        {!!'on progress'!!} <br>
    @endif
@endforeach
@endsection