<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Session;

class AdminJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::all();
        return view('admin.jobindex',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_job_detail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data=[
        //     'job_name'=>$request->jobname,
        //     'details'=>$request->details
        // ];
        // $data=Job::create($data);
        // Session::flash('success','Job info created');
        // return redirect()->route('admin-jb.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job=Job::findOrFail($id);
        return view('admin.showjob',$id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Job::findOrFail($id);
        return view('admin.edit_job_detail',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $job=Job::findOrFail($id);
        $job=Job::update($request-all());
        //$job->update()->$request->all();
        // $job->job_name=$request->job_name;
        // $job->details=$request->details;
        // $job->update();
        
        Session::flash('success','job info updated');
        return redirect()->route('admin-jb.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus=Job::destroy($id);
        if($hapus){
            Session::flash('success','Job info deleted');
            return redirect()->route('admin-jb.index');
        }else{
            echo "Delete failed";
        }

    }
}
