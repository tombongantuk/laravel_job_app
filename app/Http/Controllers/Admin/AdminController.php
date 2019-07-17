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
        // $data=new Job;
        $jobs=Job::with('users')->whereHas('users',function($q){
            $q->where('status','unread');})->get();
        return view('admin.admin_user_job_status',compact('jobs'));
    }

    //fucntion lihat status
    public function lihatStatus(Request $request){
        $job=Job::findOrFail($request->job_id);
        $user=User::findOrFail($request->user_id);
        return view('admin.admin_update_status',compact('job','user'));

    }
    //function update status
    public function updateStatus(Request $request){
        $user=User::findOrFail($request->user_id); 
        $user->jobs()->updateExistingPivot($request->job_id,['status'=>$request->status]);
        return redirect()->back();
    }

    //function lihat profil user
    public function lihatProfile($id){
        $user=User::with('userdetail','filecv')->findOrFail($id);
        return view('admin.admin_user_profile',compact('user')); 
    }
}
