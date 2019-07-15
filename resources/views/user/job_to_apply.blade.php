@extends('master.master')

@section('title','Apply Job')
    
@section('content')
<h1>Job To Apply</h1>
<form action="{{route('user-jba',$job->id)}}"class="form-horizontal"role="form"method="post">
    {{ csrf_field() }}
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
        <a href="{{route('user-job')}}"class="btn btn-primary">Back</a>
        <input type="submit"class="btn btn-primary"value="Apply"onclick="return confirm=('confirm to apply?')">
    </div>
</form>
@endsection