@extends('master.master')

@section('title','Job Status')

@section('content')
<h1>Applied Job(s)</h1>
<a href="#"class="btn btn-primary">Back</a><br>
@foreach ($job_status as $status)
    {{$status->job_name}}<br>
    @if(($status->pivot->status)===1)
       {!!'accepted'!!} <br>
    @elseif(($status->pivot->status)===2)
        {!!'rejected'!!} <br>
    @else 
        {!!'on progress'!!} <br>
    @endif
@endforeach
@endsection