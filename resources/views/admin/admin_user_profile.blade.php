@extends('master.master')

@section('title','User Profile')
    
@section('content')
    <h1>User Profile</h1>
    <form action="">
        <div>
            <label for="name">Nama</label>
            <input type="text"class="form-group"name="name"id="name"value="{{$user->name}}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="text"class="form-group"name="email"id="email"value="{{$user->email}}">
        </div>
        <div>
            <label for="ktp">No KTP</label>
            <input type="text"class="form-group"name="ktp"id="ktp"value="{{$user->userdetail->no_ktp}}">
        </div>
        <div>
            <label for="email">Alamat</label>
            <input type="text"class="form-group"name="alamat"id="alamat"value="{{$user->userdetail->alamat}}">
        </div>
        <div>
            <label for="email">Pendidikan</label>
            <input type="text"class="form-group"name="pendidikan"id="pendidikan"value="{{$user->userdetail->pendidikan}}">
        </div>
        <div>
            <label for="email">Skill</label>
            <input type="text"class="form-group"name="skill"id="skill"value="{{$user->userdetail->skill}}">
        </div>
        <div>
            <label for="email">Hobi</label>
            <input type="text"class="form-group"name="hobi"id="hobi"value="{{$user->userdetail->hobi}}">
        </div>
            <div>
                <label for="email">No HP</label>
                <input type="text"class="form-group"name="no_hp"id="no_hp"value="{{$user->userdetail->no_hp}}">
            </div>
    </form>
    <div class="row">
    <a href="{{route('admin-us')}}">Back</a>
    </div> 
@endsection