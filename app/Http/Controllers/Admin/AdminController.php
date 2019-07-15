<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Job;

class AdminController extends Controller
{
    //function index halaman pertaman admin
    public function index(){
        return view('admin.admin')->with('role','admin');
    }

    //function kelola perkerjaan
    public function kelola(){
        $jobs=Job::with('users:user_id,name')->get();
        return view('admin.admin_user_job_status',compact('jobs'));
    }

    //fucntion lihat status
    public function lihatStatus($id){
        //$job=Job::('users')->get();

    }
    //function update status
    public function updateStatus(){

    }

    //function lihat profil user
    public function lihatProfile($id){
        $user=User::with('userdetail')->findOrFail($id);
        return view('admin.admin_user_profile',compact('user')); 
    }
}
