<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\teacher;

class LoginController extends Controller
{
   public function signin()
   {
       return view('account.login');
   }
   public function logsubmit(Request $req){

$user= teacher::where ("email",$req->email)->where('password',($req->password))->first();
  if($user)
        {
            $req->session()->put('email',$user->email);
            $req->session()->put('first_name',$user->first_name);
         $req->session()->flash('msg',"Login Successful");
            return view('Teacher.tprofile')
            ->with('user',$user);
         }
        else{
           session()->flash('msg',"userID password invalid");
            return redirect()->route('signin');
        }
    }
    public function logout(){
        session()->flush();
        return redirect()->route('signin');
    }

}