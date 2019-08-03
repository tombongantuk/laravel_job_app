@extends('master.admin_dashboard')

@section('title','Update Status')

@section('content')
<h1>Update Status</h1>
<a href="{{route('admin-home')}}"class="btn btn-primary">Back</a>
@foreach ($jobs as $job)
<div class="container">
    <form action="{{route('admin-update-job-status')}}"class="form-horizontal"method="post">
        <br/>
        {{ csrf_field() }}
        <h4><i>#{{$job->job_name}}</i></h4>
        <input type="hidden"name="job_id"value="{{$job->id}}"readonly>
        <hr/>
        <div class="container">
            @foreach ($job->users as $user)
                @if ($user->pivot->status==='unread')
                    <form>
                        <div class="form-group">
                            <small><span><strong>Nama Pelamar: </strong></span>{{$user->name}}</small>    
                        
                            <small><span><strong><br/>Status: </strong></span>{{$user->pivot->status}}</small>
                        
                            <small><span><strong><br/>User_id: </strong></span>{{$user->pivot->user_id}}</small>
                        
                            <input type="hidden"class="form-control"name="user_id"value="{{$user->pivot->user_id}}"readonly>
                        
                            <small><span><strong><br/>Ubah jadi: </strong></small>    
                            <input type="text"name="status"id="status"placeholder="accept/reject">
                        
                            <small><span><strong>Ket: </strong></small>
                            <input type="text"name="description"id="description"><br/><br/> 
                            
                        </div>
                        <input type="submit"class="btn btn-primary"value="Change">
                        <a href="{{route('admin-user-profile',$user->pivot->user_id)}}"class="btn btn-outline-info">Profile</a> 
                        <hr/>
                    </form>   
                @endif
            @endforeach
        </div>
        <br/>
    </form>
</div>
@endforeach
@endsection