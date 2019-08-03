@extends('master.master')

@section('title','Update status')
 
@section('content')
<form action=""method=""role="">
<div class="container">
    <h4><i>#{{$jobs->job_name}}</i></h4>
    <input type="hidden"name="job_id"value="{{$jobs->id}}"readonly>
    
</div>
</form>    
<a href="{{route('admin-us')}}">Back</a>
@endsection