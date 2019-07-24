@extends('master.user_dashboard')

@section('title','User Profile')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Hello {{$user->name}}<h2>
        </div>
        <h4><i>you can edit your profile here</i></h4>
        <form class="form-horizontal"action="{{route('user_profile.update',$user->id)}}"role="form"
        enctype="multipart/form-data" method="POST">
            {{ csrf_field()}}
            {{method_field('PATCH')}}
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" name="name"id="name"class="form-control"autofocus="true"value="{{$user->name}}"readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email"id="email"class="form-control"autofocus="true"value="{{$user->email}}"readonly>
            </div>
            <div class="form-group">
                <label for="birth">Tanggal Lahir</label>
                <input type="text" name="birth"id="birth"class="form-control"autofocus="true"value="{{$user->birth}}"readonly>
            </div>
            <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" name="no_ktp"id="no_ktp"class="form-control"autofocus="true"value="{{$user->userdetail->no_ktp}}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control"name="alamat" id="alamat" cols="5" rows="5">{{$user->userdetail->alamat}}</textarea>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <textarea class="form-control"name="pendidikan" id="pendidikan" cols="5" rows="5">{{$user->userdetail->pendidikan}}</textarea>
            </div>
            <div class="form-group">
                <label for="skill">Skill</label>
                <textarea class="form-control"name="skill" id="skill" cols="5" rows="5">{{$user->userdetail->skill}}</textarea>
            </div>
            <div class="form-group">
                <label for="hobi">Hobi</label>
                <textarea class="form-control"name="hobi" id="hobi" cols="5" rows="5">{{$user->userdetail->hobi}}</textarea>
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="text" name="no_hp"id="no_hp"class="form-control"autofocus="true"value="{{$user->userdetail->no_hp}}">
            </div>
            <div class="form-group">
                <label for="upload_file">Upload CV</label>
                <input type="file" name="file"id="file"class="form-control">
            </div>
            <div class="form-group">
                <a href="{{route('user-home')}}"class="btn btn-primary">Back</a>
                <input type="submit"class="btn btn-primary"value="Save">
            </div>
        </form>
    </div>
@endsection