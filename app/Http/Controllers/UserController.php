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

class UserController extends Controller
{
    /*
    * Route: register
    */
    public function index(){
        return view('registrationPage');
    }

    /*
    * Submit Register Request
    *
    * @param  RegisterCheck  $request
    *
    * @return Response
    */
    public function submitRegisterData(RegisterCheck $request){
      
        // Retrieve the validated input data...
        $validated = $request->validated();
 
        $validated['password'] = Hash::make($validated['password']);
         $user = new User();
         $user->name = $validated['name'];
         $user->username = $validated['username'];
         $user->password = $validated['password'];
         $user->email = $validated['email'];
         $user->phone = $validated['phone'];
         $user->role = 1;
         $user->status = 1;
         $user->save();
    
         return redirect()->route('dashboard')
                        ->with('success','User created successfully');
    }
}
