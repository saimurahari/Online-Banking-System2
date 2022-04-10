<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use App\Models\Benificiary;
use App\Models\Account;
use Session;
use Symfony\Component\Console\Input\Input;

class BenController extends Controller
{
    public function BenificaryDetail(){
        $data2=array();
        if(Session::has('loginid')){
            $data2 = Account::where('id','=',Session::get('loginid'))->first();
        }

        return view('auth.benificarydetail',['data2'=>$data2]);
    // },['members'=>$user]
    // $var = $request->input('accname');
     // return view("auth.benificarydetail",compact('data2'));
    // $user =  DB::table("benificiaries")->where("accountholder",558213)->get();

        }
        public function benUser(Request $request){
            $data2=array();
        if(Session::has('loginid')){
            $data2 = Account::where('id','=',Session::get('loginid'))->first();
        }

            // $accountnum2 = $request->$accnum2;

            // $user = DB::select('select * from benificiaries where accountholder = ?', [558213]);

             $user =  DB::table("benificiaries")->where("accountholder",$request->Input('accname2'))->get();
            return view('auth.benuser',['members'=>$user],['data2'=>$data2]);
        }

        public function checkStatement(){
            $data2=array();
        if(Session::has('loginid')){
            $data2 = Account::where('id','=',Session::get('loginid'))->first();
        }

        return view('auth.checkstatement',['data2'=>$data2]);

        }
        public function Check(Request $request){
            $data2=array();
        if(Session::has('loginid')){
            $data2 = Account::where('id','=',Session::get('loginid'))->first();
            $user =  DB::table("transactions")->where("accountholder",$request->Input('accname'))->get();
            $user2 =  DB::table("transaction2s")->where("accountholder",$request->Input('accname'))->get();
            return view('auth.transaction',['members'=>$user],['members2'=>$user2],['data2'=>$data2]);
        }

        }

}
