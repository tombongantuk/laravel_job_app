<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Job;
use App\User;
use Auth;

class UserController extends Controller
{
    public function applyJob($id){
        //attach many to many user and job
        $job_apply=Job::findOrFail($id);
        $user_apply=User::findOrFail(Auth::user()->id);
        //$job_apply->users()->attach($user_apply);
        $user_apply->jobs()->attach($job_apply);

        return redirect()->back();
    }
    //function show list job
    public function listJob(){
        //display about job 
        $jobs=Job::all();
        return view('user.job_list_apply',compact('jobs'));
    }
    //function to apply job
    public function toApply(Request $request,$id){
        $job=Job::findOrFail($id);
        $user=User::findOrFail(Auth::user()->id);
        $has_job=$user->jobs()->where('job_id',$id)->exists();
        return view('user.job_to_apply',compact('job','has_job'));
    }
    
    //function for user job status
    public function jobStatus($id){
        $user=User::findOrFail($id);
        $job_status=$user->jobs()->get();
        //$job_status->jobs()->get();
        //dd($job_status);
        return view('user.user_job_status',compact('job_status'));
    }
}
