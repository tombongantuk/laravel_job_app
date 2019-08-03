@extends('master.user_dashboard')

@section('title','User Dashboard')
    
@section('content')
    <h3>Hello {{Auth::user()->name}}</h3>
    <h5><i>Welcome to Job App</i></h5><hr/>
    <i>*)ini adalah dasboard anda. Anda bisa melamar pekerjaan yang anda inginkan dan mengubah data diri anda</i>
    <hr/>
    <a href="{{route('user_profile.edit',Auth::user()->id)}}" class="btn btn-primary">Edit Profile</a><br/>
    <small>
        <i>*)ubah data diri anda</i>
    </small>
    <br/><br/>
    <a href="{{route('user-job')}}" class="btn btn-primary">Apply Job</a><br/>
    <small>
        <i>*)lamar pekerjaan yang anda inginkan</i>
    </small>
    <br/><br/>
    <a href="{{route('user-jbs',Auth::user()->id)}}" class="btn btn-primary">My Job Status</a><br/>
    <small>
        <i>*)lihat status lamaran perkerjaan anda</i>
    </small>
    {{-- <a href="{{route('user-pr.edit')}}" class="btn btn-primary">Edit Profile</a> --}}
@endsection