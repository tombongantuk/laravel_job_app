@extends('master.master')

@section('title','Update status')
 
@section('content')
<h4>Nama Pekerjaan</h4>
{{$job->job_name}}
<h4>User</h4>
{{$user->name}}
<a href="{{route('admin-us')}}">Back</a>
@endsection