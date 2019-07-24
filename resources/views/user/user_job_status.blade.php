@extends('master.user_dashboard')

@section('title','Job Status')

@section('content')
<h1>Applied Job(s)</h1>
<a href="{{route('user-home')}}"class="btn btn-primary">Back</a><br/>
@foreach ($job_status as $status)
    <label for="company_name"><strong>Nama Perusahaan: </strong></label>
    {{$status->company_name}}<br>
    <label for="job_name"><strong>Nama Pekerjaan: </strong></label>
    {{$status->job_name}}<br>
    @if(($status->pivot->status)==='accept')
        <label for="status"><strong>Status: </strong></label>
        {!!'accepted'!!} <br/><br/>
    @elseif(($status->pivot->status)==='reject')
        <label for="status"><strong>Status: </strong></label>
        {!!'rejected'!!} <br/><br/>
    @else
        <label for="status"><strong>Status: </strong></label> 
        {!!'on progress'!!} <br/><br/>
    @endif
@endforeach
@endsection