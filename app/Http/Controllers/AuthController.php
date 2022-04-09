<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
      public function registerpage()
    {
        return view('auth.register');
    }

     public function check(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password'=>'required'
            
        ]);

        $user = User::where('email','=',$req->email)->first();
        if($user){
             if(Hash::check($req->password, $user->password)){
                 $req->session()->put('loginId',$user->id);
                return redirect('/product');
        }else{
            return back();
        }
        
    }
    }

    public function product()
    {
        return view('layout.product');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull();
            return redirect('/login');
        }
    }


    
    
}