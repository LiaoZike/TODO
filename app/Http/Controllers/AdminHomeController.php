<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHomeController extends Controller
{

    public function logout()
    {
        //登出行為
        return redirect()->route('home.index');
    }

    public function login(){
        //登入行為
        return view('admin.login.index');
    }
    public function index()
    {
        return view('admin.dashboard.index');
    }
    public function verification()
    {
        return view('admin.dashboard.index');
    }
}
