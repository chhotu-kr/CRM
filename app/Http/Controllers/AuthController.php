<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
class AuthController extends Controller
{
    //
    public function Signup(Request $request){
        if($request->isMethod("post")){

            $request->validate([
                'name' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:6'
            ]);
           
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
        
            $user->password = Hash::make($request->password); 
            $user->save();

            return redirect()->route("login");
           
        }
        else{
            return view("employee.Signup");
        }
    }

    public function Login(Request $request){
       
        if($request->isMethod("post")){
            
            // $request->validate([
               
            //     'email' => 'required|unique:users',
            //     'password' => 'required|min:6'
            // ]);
            $auth = $request->only("email","password");
            
            if(Auth::guard("web")->attempt($auth)){
                
               return redirect()->route('manage.employee');
            }
            else{
                $request->session()->flash("error","login with incorrect details try again");
               return redirect()->back();
            }
           
            
        }
        return view("employee.login");
    }

    public function logout(Request $req){
       

        Auth::guard('web')->logout();

        return redirect()->back();
    }
}
