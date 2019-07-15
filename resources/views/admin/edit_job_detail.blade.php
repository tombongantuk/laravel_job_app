@extends('master.master')

@section('title','Edit Job Details')

@section('content')    
    <div class="container">
        <form class="form-horizontal"action="{{route('admin-jb.update',$job->id)}}"method="post"role="form">
            {{ csrf_field() }}
            {{method_field('PATCH')}}
            <div class="form-group">
                <label for="title">Nama Pekerjaan</label>
                <input type="text"value="{{$job->job_name}}"class="form-control"name="job_name"id="job_name"autofocus="true">
            </div>
            <div class="form-group">
                <label for="title">Detail Pekerjaan</label>
                <textarea class="form-control"name="details" id="details" cols="5" rows="5">{{$job->job_name}}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Syarat Pekerjaan</label>
                <textarea class="form-control"name="requirement" id="requirement" cols="5" rows="5">{{$job->details}}</textarea>
            </div>
            <div class="form-group">
                <label for="title">Gaji</label>
                <input type="text"value="{{$job->salary}}"class="form-control"name="salary"id="salary"autofocus="true">
            </div>
            <div class="form-group">
                <a href="{{route('admin-jb.index')}}"class="btn btn-primary">Back</a>
                <input type="submit" class="btn btn-primary"value="Save">
            </div>
        </form>
    </div>
@endsection