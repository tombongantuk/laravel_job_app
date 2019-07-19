@extends('master.master')

@section('title','Apply Job')
    
@section('content')
<h1>Job To Apply</h1>
<form action="{{route('user-jba',$job->id)}}"class="form-horizontal"role="form"method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <p>
            <input type="hidden" name="user_id" id="user_id"value="{{Auth::user()->id}}">
        </p>
        <label for="company_name"><strong>Nama Perusahaan</strong></label>
        <p>
            {{$job->company_name}}
        </p>
        <label for="company_address"><strong>Alamat Perusahaan</strong></label>
        <p>
            {{$job->company_address}}
        </p>
        <label for="job_name"><strong>Nama Pekerjaan</strong></label>
        <p>
            {{$job->job_name}}
        </p>
        <label for="details"><strong>Detail</strong></label>
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
    @if ($has_user)
    <div class="form-group">
        <a href="{{route('user-job')}}"class="btn btn-primary">Back</a>
        <input type="button"class="btn btn-primary"value="Apply"disabled><br/>
        <small><i>*)anda sudah melamar perkerjaan ini</i></small>
    @else    
    <div class="form-group">
        <a href="{{route('user-job')}}"class="btn btn-primary">Back</a>
        <input type="submit"class="btn btn-primary"value="Apply"onclick="return confirm=('confirm to apply?')">
    </div>
    @endif
</form>
@endsection