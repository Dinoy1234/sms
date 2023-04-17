<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login_view()
    {
        return view('backend.User.login');
    }

    public function login(Request $req)
    {
// dd($req->all());
    $userInfo=$req->except('_token');

    if(Auth::attempt($userInfo)){
        return redirect()->route('master.index')->with('message','Login successful.');
    }
    return redirect()->back()->with('error','Invalid user credentials');
}
public function logout()
{
  Auth::logout();
  return redirect()->route('admin.login')->with('message','logout successfully');
}

public function profile(){
    return view('admin.pages.admin_profile');
}
}
