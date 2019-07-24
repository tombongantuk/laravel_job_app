<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Requests\UserProfileRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\UserDetail;
use App\FileCv;
use Session,Storage;

class UserProfileController extends Controller
{
    public function index(){
        return view('user.user_profile');
    }
    public function create(){
        return view('user.user_profile');
    }

    public function store(UserProfileRequest $request){
        //store user profile
        $detail=UserDetail::create($request->all());
        //store file cv user
        if($detail){
            //store file cv user
            $user_id=$request->user_id;
            $user_cv=new FileCv;
            //if user choose a file then
            if($request->hasFile('file')){
                $file=$request->file('file');
                $destination_path='uploads/';
                $filename=$file->getClientOriginalName();
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
        
    public function show($id){
         
    }

    public function edit($id){
        $user=User::with('userdetail')->findOrFail($id);
        return view('user.user_edit_profile',compact('user'));
    }
    public function update(Request $request,$id){
        $user_cv=FileCv::where('user_id',$id)->first();
        
        if($request->hasFile('file')){
            if (!empty($user_cv)) {
                unlink($user_cv->file);
            }
            $file=$request->file('file');
            $destination_path='uploads/';
            $filename=$file->getClientOriginalName();
            if(!$file->move($destination_path,$filename)){
                return 'error moving file';
            }         
        }
        //if no error moving, then store
        $user_cv->user_id=$id;
        $user_cv->file=$destination_path.$filename;
        $user_cv->update();

        $user_details=UserDetail::findOrFail($id)->update($request->all());               
        Session::flash('success','Your Profile success updated');
        return redirect()->route('user-home');
    }
}