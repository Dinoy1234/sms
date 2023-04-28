<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers=User::where('role','teacher')->orderBy('id','DESC')->get();
        return view('backend.teacher.list',compact('teachers'));
    }

    public function create()
    {
        return view('backend.teacher.add');
    }

    public function store(Request $request)
    {
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/teachers', $image_name);
        }
        $request->validate([

            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'present_address' => 'required',
           
            'gender' => 'required',

        ]);
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'teacher_id' => $request->teacher_id,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'religion' => $request->religion,
            'join_date' => $request->join_date,
            'phone' => $request->phone,
            'image' => $image_name,
            'present_address' => $request->present_address,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'role' => 'teacher',

        ]);
        Toastr::success('Create successfully', 'Teacher', );
        return redirect()->route('teacher.index');
    }

    public function show(Teacher $teacher,$id)
    {
        $teacher=User::find($id);
        return view('backend.teacher.single_view',compact('teacher'));
    }

    public function edit(Teacher $teacher,$id)
    {
        $teacher=User::find($id);
        return view('backend.teacher.edit',compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher,$id)
    {
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/teachers', $image_name);
        }
        $request->validate([

            'name' => 'required',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:15',
            'present_address' => 'required',
            'gender' => 'required',

        ]);
        $teacher=User::find($id);
        $teacher->update([

            'name' => $request->name,
            'email' => $request->email,
            'teacher_id' => $request->teacher_id,
            'password' => $request->password,
            'gender' => $request->gender,
            'birth_date' => $request->birth_date,
            'religion' => $request->religion,
            'join_date' => $request->join_date,
            'phone' => $request->phone,
            'image' => $image_name,
            'present_address' => $request->present_address,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'role' => 'teacher',

        ]);
        Toastr::info('information Update successfully', 'Teacher', );
        return redirect(route('teacher.index'));
    }

    public function destroy(Teacher $teacher,$id)
    {
        User::find($id)->delete();
        Toastr::warning('All information Deleted', 'Teacher', );
        return redirect()->back();
    }
    public function TeacherExamList(){
        $exams=Exam::where('teacher_id',auth()->user()->id)->get();
        // dd($exams);
        return view('backend.teacher.examList',compact('exams'));
    }
}
