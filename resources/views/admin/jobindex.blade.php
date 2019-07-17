@extends('master.master')

@section('title','Job')
    
@section('content')
    <div class="container">
        <div class="row">
            <h3 class="pull-left">List Job</h3>
            <div class="container col-md-9 float right">
                <a href="{{route('admin-jb.create')}}"class="btn btn-primary">Create</a>
                <a href="{{route('admin-home')}}"class="btn btn-primary">Back</a>
            </div>
        </div>
        <div>
            @include('admin.job_list')
        </div>
    </div>  
@endsection