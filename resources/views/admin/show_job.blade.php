@extends('master.master')

@section('title','Job Details')
    
@section('content')
<h1>Job Details</h1>
<div class="form-group">
    <label for="job_name"><strong>Job Name</strong></label>
    <p>
        {{$job->job_name}}
    </p>
    <label for="details"><strong>Details</strong></label>
    <p>
        {{$job->details}}
    </p>
    <label for="requirement"><strong>Requirement</strong></label>
    <p>
        {{$job->requirement}}
    </p>
    <label for="salary"><strong>Salary</strong></label>
    <p>
        {{$job->salary}}
    </p>
</div>
<div class="form-group">
    <a href="{{route('admin-jb.index')}}"class="btn btn-primary">Back</a>
</div>
@endsection