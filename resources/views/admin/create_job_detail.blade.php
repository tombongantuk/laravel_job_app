@extends('master.admin_dashboard')

@section('title','Create Job Detail')
    
@section('content')
    <h1>Job Detail</h1>
    <div class="container">
        <form class="form-horizontal"action="{{route('admin_jb.store')}}"method="post"role="form">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="company_name">Perusahann</label>
                <input type="text" class="form-control"name="company_name"id="company_name"autofocus="true">
            </div>
            <div class="form-group">
                <label for="company_address">Alamat Perusahaan</label>
                <input type="text" class="form-control"name="company_address"id="company_address">
            </div>
            <div class="form-group">
                <label for="job_name">Nama Pekerjaan</label>
                <input type="text" class="form-control"name="job_name"id="job_name">
            </div>
            <div class="form-group">
                <label for="details">Detail Pekerjaan</label>
                <textarea class="form-control"name="details" id="details" cols="5" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="requirement">Syarat Pekerjaan</label>
                <textarea class="form-control"name="requirement" id="requirement" cols="5" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="salary">Gaji</label>
                <input type="text" class="form-control"name="salary"id="salary"autofocus="true">
            </div>
            <div class="form-group">
                <a href="{{route('admin_jb.index')}}"class="btn btn-primary">Back</a>
                <input type="submit" class="btn btn-primary"value="Save">
            </div>
        </form>
    </div>
@endsection