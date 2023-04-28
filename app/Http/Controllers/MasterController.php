<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use App\Models\Department;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class MasterController extends Controller
{
    public function index()
    {
        $student=User::where('role','student')->count();
        $teacher=User::where('role','teacher')->count();
        $class=Department::count();
        $exam=Exam::count();
        // dd($student);
        return view('backend.admin.dashboard_content',compact('student','teacher','class','exam'));
    }
    public function profile()
    {

        return view('backend.profile.profile');
    }

    public function profileEdit(){
        return view('backend.profile.editProfile');
    }

    public function profileEditStore(Request $request,$id){
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/students', $image_name);
        }
        // dd('ok');
        $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'present_address' => 'required',
            'permanent_address' => 'required',
        ]);
        
        $data=User::find($id);
        $data->update([
            'name' => $request->name,
           'gender' => $request->gender,
           'birth_date' => $request->birth_date,
           'religion' => $request->religion,
           'phone' => $request->phone,
           'image' => $image_name,

           'father_name' => $request->father_name,
           'father_occ' => $request->father_occ,
           'father_email' => $request->student_email,
           'father_phone' => $request->father_phone,

           'mother_name' => $request->mother_name,
           'mother_occ' => $request->mother_occ,
           'mother_email' => $request->mother_email,
           'mother_phone' => $request->mother_phone,

           'present_address' => $request->present_address,
           'permanent_address' => $request->permanent_address,

        ]);
        Toastr::success('information Update successfully', 'Profile' );
        return redirect()->back();
    }
public function teacherEdit(){

    return view('backend.profile.teacherProfile');
}
public function teacherEditStore(Request $request,$id){

    $image_name = null;
    if ($request->hasfile('image')) {
        $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->storeAs('/uploads/teachers', $image_name);
    }
    $teacher=User::find($id);
    $teacher->update([
        'name' => $request->name,
        'gender' => $request->gender,
        'birth_date' => $request->birth_date,
        'religion' => $request->religion,
        'join_date' => $request->join_date,
        'phone' => $request->phone,
        'image' => $image_name,
        'present_address' => $request->present_address,
        'qualification' => $request->qualification,
        'experience' => $request->experience,
    ]);
    Toastr::info('information Update successfully', 'Profile', );
    return redirect()->back();
}

}
