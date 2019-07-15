{{-- view untuk melihat daftar pekerjan dan user yang melamar --}}
@extends('master.master')

@section('title','Update Status')

@section('content')
<h1>Update Status</h1>
<a href="{{route('admin-home')}}"class="btn btn-primary">Back</a>
<form class="form-horizontal"role="form"method="">
    <div class="container">
        @foreach ($jobs as $job)
            {{$job->job_name}}<br>
            <div class="col">
                @foreach ($job->users as $user)
                    {{$user->name}}
                    <select name="status" id="status">
                        <option value="unread">unread</option>
                        <option value="accept">accept</option>
                        <option value="reject">reject</option>
                    </select>
                    {{-- @if(($user->pivot->status)===1)
                        {!!'accepted'!!} 
                    @elseif(($user->pivot->status)===2)
                        {!!'rejected'!!} 
                    @else 
                        {!!'unread'!!} <br>
                    @endif --}}
                    <a href="#"class="btn btn-outline-info">Change</a>
                    <a href="{{route('admin-user-profile',$user->user_id)}}"class="btn btn-outline-info">Profile</a><br><br>
                @endforeach
            </div>
        @endforeach
    </div>
</form>    
@endsection