<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class UserController extends Controller
{
   public function registration(){

    $classes=Department::all();
    return view('backend.User.register',compact('classes'));
    
   }

   public function registrationStore(Request $request){
    
    $image_name = null;
    if ($request->hasfile('image')) {
        $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads/students', $image_name);
    }
// dd($image_name);
$request->validate([

    'name' => 'required',
    'email' => 'required|unique:users',
    'password' => 'required',
    'class' => 'required',
    'image' => 'required',
    

]);
   User::create([

       'name' => $request->name,
       'email' => $request->email,
       'class' =>$request->class,
       'password' =>bcrypt($request->password),
       'image' => $image_name,
       

   ]);
//    dd($a);
Toastr::success('Created successfully', 'Account', );
   return redirect()->route('admin.login') ;

   }
}
