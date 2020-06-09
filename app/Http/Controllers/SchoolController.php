<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /*
    * Redirect to allSchoolList
    */
    public function index(Request $request){
        if ($request->session()->exists('name')) {
            $data = $request->session()->all();
            return view('dashboard',$data );
       }else{
           return view('login');
       }
    }
}
