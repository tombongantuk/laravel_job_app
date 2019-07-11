<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserProfileController extends Controller
{
    public function index(){
        return view('user.user_profile');
    }
    public function create(){
        return view('user.user_profile');
    }

    public function store(Request $request){
        //store user profile
        $details=UserDetail::create($request->all());

        //store file cv user
        if($details){
            //store file cv user
            $user_id=$details->id;
            $user_cv=new CV;
            //if user choose a file then
            if($request->hasFile('file')){
                $file=$request->file('file');
                $destination_path='uploads/';
                $filename=str_random(6).'_'.$file->getClientOriginalName();
                if(!$file->move($destination_path,$filename)){
                    return 'error moving file';
                }
                //if no error moving, then store
                Storage::delete(public_path($user_cv->file));
                $user_cv->user_id=$user_id;
                $user_cv->file=$destination_path.$filename;
                $user_cv->save();
            } 
        }
       Session::flash('success','Your Profile success stored');
       return redirect()->route('user-home'); 
    }
        
    public function show(){
        //$user=User::findOrFail($id);
        //return view('user.show_user_profile',$id);
    }

    public function edit(){
        //return view('user.user_edit_profile');
    }
    public function update(){
        //$user=User::findOrFail($id);
    }
        
    public function delete(){}
}
