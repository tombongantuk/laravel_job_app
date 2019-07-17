<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class GuestController extends Controller
{
    public function index(){
        $jobs=Job::all();
        return view('guest.guest_home',compact('jobs'));
    }
    public function About(){
        return view('guest.guest_about');
    }
    public function Contact(){
        return view('guest.guest_contact');
    }
}
