<?php

namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterCheck;
use App\User;
use App\Role;
use Session;
use Hash;
class DashboardController extends Controller
{
    /*
    * Redirect to dashboard
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
