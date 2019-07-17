{{-- view untuk melihat daftar pekerjan dan user yang melamar --}}
@extends('master.master')

@section('title','Update Status')

@section('content')
<h1>Update Status</h1>
<a href="{{route('admin-home')}}"class="btn btn-primary">Back</a>
<form action="{{route('admin-update-job-status')}}"class="form-horizontal"role="form"method="post">
    {{ csrf_field() }}
    <br/>
    <div class="container">
        @foreach ($jobs as $job)
        <h4>Nama Pekerjann</h4>
            {{$job->job_name}}<br>
            <input type="hidden"name="job_id"value="{{$job->id}}">
            <div class="">
                @foreach ($job->users as $user)
                <small>Nama Pelamar</small>    
                {{$user->name}}
                    <input type="hidden"name="user_id"value="{{$user->id}}"readonly>
                    <input type="text"name="status"id="status"placeholder="accept/reject">
                    <input type="submit"class="btn btn-primary"value="Change">
                    <a href="{{route('admin-user-profile',$user->user_id)}}"class="btn btn-outline-info">Profile</a><br><br>
                @endforeach
            </div>
        @endforeach
    </div>
</form>    
@endsection