<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Teacher;
use Illuminate\Http\Request;

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
        User::create([

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
        return redirect(route('teacher.index'));
    }

    public function destroy(Teacher $teacher,$id)
    {
        User::find($id)->delete();

        return redirect()->back();
    }
}
