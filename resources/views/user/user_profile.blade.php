@extends('master.user_dashboard')

@section('title','User Profile')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Hello {{Auth::user()->name}}<h2>
        </div>
        <h4><i>please complete your profile first</i></h4>
        <form class="form-horizontal"action="{{route('user_profile.store')}}"role="form"
        enctype="multipart/form-data" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" name="no_ktp"id="no_ktp"class="form-control"autofocus="true">
                <small class="error">{{$errors->first('no_ktp')}}</small>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control"name="alamat" id="alamat" cols="5" rows="5"></textarea>
                <small class="error">{{$errors->first('alamat')}}</small>
            </div>
            <div class="form-group">
                <label for="pendidikan">Pendidikan</label>
                <textarea class="form-control"name="pendidikan" id="pendidikan" cols="5" rows="5"></textarea>
                <small class="error">{{$errors->first('pendidikan')}}</small>
            </div>
            <div class="form-group">
                <label for="skill">Skill</label>
                <textarea class="form-control"name="skill" id="skill" cols="5" rows="5"></textarea>
                <small class="error">{{$errors->first('skill')}}</small>
            </div>
            <div class="form-group">
                <label for="hobi">Hobi</label>
                <textarea class="form-control"name="hobi" id="hobi" cols="5" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="no_hp">No Hp</label>
                <input type="text" name="no_hp"id="no_hp"class="form-control"autofocus="true">
                <small class="error">{{$errors->first('no_hp')}}</small>
            </div>
            <div class="form-group">
                <label for="upload_file">Upload CV</label>
                <input type="file" name="file"id="file"class="form-control">
                <small class="error">{{$errors->first('file')}}</small>
            </div>
            <div class="form-group">
                <a href="{{route('user-home')}}"class="btn btn-primary">Back</a>
                <input type="submit"class="btn btn-primary"value="Save">
            </div>
        </form>
    </div>
@endsection