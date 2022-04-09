<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Hash;
use App\Models\Benificiary;
use App\Models\Account;
use Session;

class BenController extends Controller
{
    public function BenificaryDetail(Request $request){
        $data2=array();
        if(Session::has('loginid')){
            $data2 = Account::where('id','=',Session::get('loginid'))->first();
        }
        $var = $request->input('accname');
        return view("auth.benificarydetail",compact('data2'));
    }
}
