<?php
namespace App\Http\Controllers;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Http\Requests\LoginCheck;
use App\User;
use App\Role;
use Session;
use Auth;
use Hash;
class LoginController extends Controller
{
    /*
    * default method
    */
    public function index(Request $request){

        if ($request->session()->exists('name')) {
            $data = $request->session()->all();

            return redirect()->route('dashboard')
            ->with(['success'=>'redirect to dashboard','data'=>$data]);
            //  return view('dashboard',$data );
        }else{
            return view('login');
        }
       
    }

    /*
    * Submit Login Request
    *
    * @param  LoginCheck  $request
    *
    * @return Response
    */
    public function submitLoginData(LoginCheck $request){
      
        // Retrieve the validated input data...
        $validated = $request->validated();
        $users = User::where(['username'=>$validated['username'],'password'=>$validated['password']])->get();
        
         if(count($users) <= 0){
            return back()->with('error','User Id and password mismatch');
         }else{
            //  print_r($users[0]->name);die;
            $sessionData = array(
                'name' => $users[0]->name,
                'username' => $users[0]->username,
                'email' => $users[0]->email,
                'phone' => $users[0]->phone,
                'role' => $users[0]->role
            );
           // Via a request instance...
           $request->session()->put($sessionData);
           $data = $request->session()->all();
           return redirect()->route('dashboard')
            ->with(['success'=>'redirect to dashboard','data'=>$data]);
            // return view('dashboard',$data );
           
         }
    }



    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login')
                        ->with('success','logout successfully');
    }
}
