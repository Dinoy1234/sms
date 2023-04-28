<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
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
        if(Auth::user()->role == 'student' && Auth::user()->status == 'Approved' || Auth::user()->role == 'teacher'||Auth::user()->role == 'admin'){
            Toastr::info('Login successful.', 'Login', );
            return redirect()->route('master.index');
        }
        Auth::logout();
        Toastr::warning('Not approved Yet', 'Pending', );
        return redirect()->back();
    }
    Toastr::warning('Invalid user credentials.', 'Error', );
    return redirect()->back();
} 
public function logout()
{
 
  return redirect()->route('admin.login')->with('message','logout successfully');
}

public function profile(){
    return view('admin.pages.admin_profile');
}
}
