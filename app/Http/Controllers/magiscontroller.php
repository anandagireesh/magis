<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class magiscontroller extends Controller
{
    //


     public function index()
    {
      
    
        $var=DB::table('news')->get();
        
        $var2=DB::table('portfolios')->get();
        $var3=DB::table('events')->get();
        return view('home')->with('tt',$var)->with('tt2',$var2)->with('tt3',$var3); ; 

    }

    public function company()
    {
    	return view('company');
    }
}
