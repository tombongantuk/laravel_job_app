@extends('master.master')

@section('title','User List')
 
@section('content')
<div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>      
                @foreach ($users as $key=>$user)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td><a href="#" class="btn btn-raised btn-primary">#</a></td>
                    <br>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
