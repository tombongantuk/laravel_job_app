@extends('master.admin_dashboard')

@section('title','Admin Dashboard')

@section('content')
    <h1>Hello</h1>
    <h3>Welcome {{Auth::user()->name}}</h3>
    <hr/>
    <p>
        <i>
            *)Ini merupakan dashboard anda. Anda bisa menambahkan lowongan perkerjaan dan melihat status lowongan pelamar
        </i>
    </p>
    <hr/>
    <a href="{{route('admin_jb.index')}}"class="btn btn-primary">Kelola Pekerjaan</a><br/>
    <small>
        <i>*)kelola pekerjaan untuk dilamar</i>
    </small>
    <br/><br/>
    <a href="{{route('admin_status')}}"class="btn btn-primary">Status Lamaran</a><br/>
    <small>
        <i>*)list status lamaran user</i>
    </small>
    <br/><br/>
    <a href="{{route('admin_us')}}"class="btn btn-primary">Kelola Lamaran</a><br/>
    <small>
        <i>*)kelola lamaran untuk mengubah status pelamar</i>
    </small>
    <br/><br/>
    <a href="{{route('admin_user_list.index')}}"class="btn btn-primary">User</a><br/>
    <small>
        <i>*)list user yang mendaftar</i>
    </small>
    <br/><br/>    
@endsection