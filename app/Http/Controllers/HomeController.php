<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
            //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'user']);
        
        if ($request->user()->hasRole('admin')){
            return redirect()->route('admin-home');
        } 
        elseif ($request->user()->hasRole('user')){
            return redirect()->route('user-home');
        }  
    }
}