{{-- view untuk melihat daftar pekerjan dan user yang melamar --}}
@extends('master.master')

@section('title','Update Status')

@section('content')
<h1>Update Status</h1>
<a href="{{route('admin-home')}}"class="btn btn-primary">Back</a>
<form action="{{route('admin-update-job-status')}}"class="form-horizontal"method="post">
    {{ csrf_field() }}
    <br/>
    <div class="container">
        @foreach ($jobs as $job)
            <h4><i>#{{$job->job_name}}</i></h4>
            <input type="text"name="job_id"id="job_id"value="{{$job->id}}"readonly>
            <hr/>
            <div class="col-md-9">
                @foreach ($job->users as $user)
                    @if ($user->pivot->status==='unread')
                        <div class="container">
                            <small><span><strong>Nama Pelamar: </strong></span>{{$user->name}}</small>    
                        </div>
                        <div class="container">
                            <small><span><strong>Status: </strong></span>{{$user->pivot->status}}</small>
                        </div>
                        <div class="container">
                            <small><span><strong>User_id: </strong></span>{{$user->pivot->user_id}}</small>
                        </div>
                        <input type="hidden"name="user_id"id="user_id"value="{{$user->pivot->user_id}}"readonly>
                        <div class="container">
                            <small><span><strong>Ubah jadi: </strong></small>    
                            <input type="text"name="status"id="status"placeholder="accept/reject">
                            <input type="submit"class="btn btn-primary"value="Change">
                            <a href="{{route('admin-user-profile',$user->pivot->user_id)}}"class="btn btn-outline-info">Profile</a>
                        </div>
                        <div class="container">
                            <small><span><strong>Ket: </strong></small>
                            <input type="text"name="description"id="description"><hr/>     
                        </div>       
                @endif
                @endforeach
            </div>
            <hr/>
            <br/>
        @endforeach
    </div>
</form>    
@endsection