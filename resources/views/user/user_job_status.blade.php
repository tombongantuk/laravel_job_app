@extends('master.user_dashboard')

@section('title','Job Status')

@section('content')
<h1>Applied Job(s)</h1><br/>
<a href="{{route('user-home')}}"class="btn btn-primary">Back</a><br/><br/><hr/>
@foreach ($job_status as $status)
    <label for="company_name"><strong>Nama Perusahaan: </strong></label>
    {{$status->company_name}}<br>
    <label for="job_name"><strong>Nama Pekerjaan: </strong></label>
    {{$status->job_name}}<br>
    @if(($status->pivot->status)==='accept')
        <label for="status"><strong>Status: </strong></label>
        {!!'accepted'!!} <br/><hr/>
    @elseif(($status->pivot->status)==='reject')
        <label for="status"><strong>Status: </strong></label>
        {!!'rejected'!!} <br/><hr/>
    @else
        <label for="status"><strong>Status: </strong></label> 
        {!!'on progress'!!} <br/><hr/>
    @endif
@endforeach
@endsection