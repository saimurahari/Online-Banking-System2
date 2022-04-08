<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;


class CustomController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    public function registration(){
        return view("auth.registration");

    }
    public function registerUser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12',
        ]);
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $res = $user->save();
        if($res){
            return back()->with('success','You have registered Successfully');
        }else{
            return back()->with('fail','Something went wrong');

        }

    }
    public function loginUser(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if($request->password=$user->password){
                $request->session()->put('loginid',$user->id);
                return redirect('dashboard');

            }else{
                return back()->with('fail','Password not matched');
            }

        }else{
            return back()->with('fail','This email/password is not registered');
        }
    }
    public function dashboard()
    {
        $data=array();
        if(Session::has('loginid')){
            $data = User::where('id','=',Session::get('loginid'))->first();
        }
        return view('auth.dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginid')){
            Session::pull('loginid');
            return redirect('login');
        }
    }
    public function newBank(){
        $data=array();
        if(Session::has('loginid')){
            $data = User::where('id','=',Session::get('loginid'))->first();
        }
        return view('auth.newaccount',compact('data'));
    }
}

