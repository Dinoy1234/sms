<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function registration(){

    return view('backend.User.register');
    
   }

   public function registrationStore(Request $request){
    
    $image_name = null;
    if ($request->hasfile('image')) {
        $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads/students', $image_name);
    }
// dd($image_name);
   User::create([

       'name' => $request->name,
       'email' => $request->email,
       'password' =>bcrypt($request->password),
       'image' => $image_name,
       

   ]);
//    dd($a);
   
   return redirect()->route('admin.login')
        ->with('success', 'Student created successfully.');

   }
}
