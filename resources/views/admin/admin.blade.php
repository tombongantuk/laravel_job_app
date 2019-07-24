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
    <a href="{{route('admin-jb.index')}}"class="btn btn-primary">Kelola Pekerjaan</a>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button"data-toggle="dropdown">
            Kelola Pekerjaan<span class="caret"></span>
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>    
    <a href="{{route('admin-us')}}"class="btn btn-primary">Kelola Lamaran</a>
    <a href="{{route('admin_user_list.index')}}"class="btn btn-primary">Kelola User</a>    
@endsection