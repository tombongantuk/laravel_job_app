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
        $jobs=Job::with('users')->whereHas('users',function($q){
            $q->having('status','=','unread');})->orderBy('id')->get();
        //$jobs=Job::with('users')->get();
        // $user=new User;
        // $status=$user->jobs()->wherePivot('status','=','unread')->get();
        return view('admin.admin_user_job_status',compact('jobs'));
        //return view('admin.admin_user_job_status',compact('jobs'));
    }

    // //fucntion lihat status
    // public function lihatStatus(Request $request){
    //     $job=Job::findOrFail($request->job_id);
    //     $user=User::findOrFail($request->user_id);
    //     return view('admin.admin_update_status',compact('job','user'));

    //}

    //function update status
    public function updateStatus(Request $request){
        $user_id=$request->user_id;
        $job=Job::findOrFail($request->job_id); 
        $job->users()->updateExistingPivot($user_id,['status'=>$request->status,'description'=>$request->description]);
        
        return redirect()->back();
    }

    //function lihat profil user
    public function lihatProfile($id){
        $user=User::with('userdetail','filecv')->findOrFail($id);
        return view('admin.admin_user_profile',compact('user')); 
    }
}
