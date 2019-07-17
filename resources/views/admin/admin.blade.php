@extends('master.admin_dashboard')

@section('title','Admin Dashboard')

@section('content')
    <h1>Admin Dashboard</h1>
    <h3>Welcome {{Auth::user()->name}}</h3>
    <a href="{{route('admin-jb.index')}}"class="btn btn-primary">Kelola Pekerjaan</a>    
    {{-- <div class="container">
        <br>
         @include('admin.admin_info_user_job') 
    </div>--}}
    <a href="{{route('admin-us')}}"class="btn btn-primary">Kelola Lamaran</a>
    <a href="{{route('admin_user_list.index')}}"class="btn btn-primary">Kelola User</a>    
@endsection