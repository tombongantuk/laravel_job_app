@extends('master.master')

@section('title','Edit Job Details')

@section('content')    
    <div class="container">
        <form class="form-horizontal"action="{{route('admin-jb.update')}}"method=""role="">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="title">Nama Pekerjaan</label>
                <input type="text" class="form-control"name="job_name"id="job_name"autofocus="true">
            </div>
            <div class="form-group">
                <label for="title">Detail Pekerjaan</label>
                <input type="text" class="form-control"name="details"id="details"autofocus="true">
            </div>
            <div class="form-group">
                <label for="title">Syarat Pekerjaan</label>
                <input type="text" class="form-control"name="requirement"id="requirement"autofocus="true">
            </div>
            <div class="form-group">
                <label for="title">Gaji</label>
                <input type="text" class="form-control"name="salary"id="salary"autofocus="true">
            </div>
            <div class="form-group">
                <a href="{{route('admin-jb.index')}}"class="btn btn-primary">Back</a>
                <input type="submit" class="btn bn-primary"value="Save">
            </div>
        </form>
    </div>
@endsection