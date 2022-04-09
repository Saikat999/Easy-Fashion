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
}