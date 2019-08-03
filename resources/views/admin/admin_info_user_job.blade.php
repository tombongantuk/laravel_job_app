@extends('master.admin_dashboard')

@section('title','Info status')
 
@section('content')
<h3>List Status Lamaran User</h3><br/>
<a href="{{route('admin-home')}}"class="btn btn-primary">Back</a><br/><hr/>
<div class="container">
    <form class="form-horizontal">
        @foreach ($jobs as $job)
            <h4><i>#{{$job->job_name}}</i></h4>
            <div class="container">
                <br/>
            @foreach ($job->users as $user)
            
                <small><span><strong>Nama Pelamar: </strong></span>{{$user->name}}</small><br/>
                <small><span><strong>Status: </strong></span>{{$user->pivot->status}}</small><br/>
                <small><span><strong>Ket: </strong></span>{{$user->pivot->description}}</small><br/>
                <hr/>
            @endforeach
            <br/>
            </div>
        @endforeach
    </form>
</div>    
@endsection