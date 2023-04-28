<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\examAttend;
use App\Models\User;
use App\Models\Student;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class StudentController extends Controller
{
    public function index()
    {
        $student=User::where('role','student')->get();
        return view('backend.student.list',compact('student'));
    }

        public function create()
        {
            return view('backend.student.add');
        }

    public function store(Request $request)
    {
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/students', $image_name);
        }
        $request->validate([

            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'gender' => 'required',
            
        ]);
       User::create([

           'name' => $request->name,
           'email' => $request->email,
           'student_id' => $request->student_id,
           'password' => bcrypt($request->password),
           'gender' => $request->gender,
           'birth_date' => $request->birth_date,
           'class' => $request->class,
           'religion' => $request->religion,
           'join_date' => $request->join_date,
           'phone' => $request->phone,
           'section' => $request->section,
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
       Toastr::success(' created successfully.', 'Student' );
       return redirect()->route('student.index');
    }

    public function show(Student $student,$id)
    {
        $students=User::find($id);
        return view('backend.student.single_view',compact('students'));
    }

    public function edit(Student $student,$id)
    {
        $student=User::find($id);
        return view('backend.student.edit',compact('student'));
    }

    public function update(Request $request, Student $student,$id)
    {
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/students', $image_name);
        }
        $request->validate([

            'name' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'present_address' => 'required',
            'permanent_address' => 'required',
            'gender' => 'required',

        ]);
        $data=User::find($id);
        $data->update([
            'name' => $request->name,
           'email' => $request->email,
           'student_id' => $request->student_id,
           'password' => $request->password,
           'gender' => $request->gender,
           'birth_date' => $request->birth_date,
           'class' => $request->class,
           'religion' => $request->religion,
           'join_date' => $request->join_date,
           'phone' => $request->phone,
           'section' => $request->section,
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
        Toastr::success('information Update successfully', 'Student' );
        return redirect()->route('student.index');
    }

    public function delete($id){
        User::find($id)->delete();
        Toastr::warning('Account Deleted', 'Student' );
        return redirect()->back();
    }

    public function approved($id){
        $student=User::find($id);
        $student->update([
            'status'=>'Approved'
        ]);
        Toastr::success('Approved successfully', 'Student' );
        return redirect()->back();
    }

    public function myExamList(Request $request ){
        // dd($request->all());
        $subject=StudentClass::where('student_id',Auth()->user()->id)->get();
        // dd($subject);
        $exams=Exam::where('subject_id',$request->subject_id)->get();
        $attend=examAttend::where('student_id',auth()->user()->id)->first();
        // dd($attend);
            return view('backend.student.myExamList',compact('subject','exams','attend'));
        
    }


}
