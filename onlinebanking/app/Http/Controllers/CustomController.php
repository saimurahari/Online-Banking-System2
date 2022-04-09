<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use App\Models\Account;
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
        $randomnumber = random_int(100000,999999);


        return view('auth.newaccount',compact('data','randomnumber'));
    }
    public function Banking(){
        return view('new-bank-account');
    }
    public function bankForm(Request $request){


        $account = new Account();
        $account->fullname=$request->fullname;
        $account->email=$request->email;
        $account->accountnum=$request->accnum;
        $account->mobile=$request->mobile;
        $account->profile=$request->profileupload;
        $account->balance=$request->openbalance;
        $account->mpin=$request->mpin;

        $account->save();
        return redirect('new-bank-account')->with('status','Your New Account is created');



    }
    public function existAccount(){
        $data=array();
        if(Session::has('loginid')){
            $data = Account::where('id','=',Session::get('loginid'))->first();
        }
        return view('auth.existaccount',compact('data'));
    }
    public function existingUser(Request $request){
        $request->validate([
            'accountnum'=>'required|email',
            'mpin'=>'required|min:5|max:12',
        ]);
        $account = Account::where('accountnum','=',$request->accnum)->first();
        if($account){
            if($request->mpin=$account->mpin){
                $request->session()->put('loginid',$account->accnum);
                return redirect('existinghome');

            }else{
                return back()->with('fail','Password not matched');
            }

        }else{
            return back()->with('fail','This email/password is not registered');
        }
    }
    public function existingHome()
    {
        $data=array();
        $data = DB::select('select * from accounts');

        return view('auth.home',compact('data'));
    }
}

