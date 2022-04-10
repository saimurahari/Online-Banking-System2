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

}
