<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
     public function create(Request $req){

        $admin =new Admin;
        $admin->name = $req->input('name');
        $admin->email = $req->input('email');
        $admin->password =Hash::make( $req->input('password'));
        $admin->save();
        return $admin;
    }


    public function index()
    {
        return view('admin.admin-login');
    }

     public function adminlogin(Request $req)
    {
        $req->validate([
            'email' => 'required',
            'password'=>'required'
            
        ]);

        $admin = Admin::where('email','=',$req->email)->first();
        if($admin){
             if(Hash::check($req->password, $admin->password)){
                 $req->session()->put('loginId',$admin->id);
                return redirect('/dashboard');
        }else{
            return back();
        }
        
    }
    }
     public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout(){
        if(Session::has('loginId')){
            Session::pull();
            return redirect('/admin');
        }
    }
}