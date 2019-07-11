@extends('master.master')

@section('title','User Profile')

@section('content')
    <div class="container">
        <div class="row">
                <h1>Edit {{Auth::user()->name}} Profile<h2>
        </div>
        <form class="form-horizontal"action="{{route('user-pr.store')}}"role="form"
        enctype="multipart/form-data" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" name="no_ktp"id="no_ktp"class="form-control"autofocus="true">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat"id="alamat"class="form-control"autofocus="true">
            </div>
            <div class="form-group">
                <label for="no_ktp">Pendidikan</label>
                <input type="text" name="pendidikan"id="pendidikan"class="form-control"autofocus="true">
            </div>
            <div class="form-group">
                <label for="no_ktp">Skill</label>
                <input type="text" name="skill"id="skill"class="form-control"autofocus="true">
            </div>
            <div class="form-group">
                <label for="no_ktp">No Hp</label>
                <input type="text" name="no_hp"id="no_hp"class="form-control"autofocus="true">
            </div>
            <div class="form-group">
                <a href="{{route('user-home')}}"class="btn btn-primary">Back</a>
                <input type="submit" name="save" id="save"class="btn btn-primary"value="Save">
            </div>
        </form>
    </div>
@endsection