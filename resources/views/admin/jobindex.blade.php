@extends('master.master')

@section('title','Job')
    
@section('content')
    <div class="container">
        <div class="row">
            <h3>List Job</h3>
        </div>
        <div class="col-md-9">
            <a href="{{route('admin-jb.create')}}">Create</a>
        </div>
        <div>
            @include('admin.job_list')
        </div>
    </div>  
@endsection