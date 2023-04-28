<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Subject;
use App\Models\Department;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SetSectionController extends Controller
{
    public function studentClass()
    {
        $students=User::where('role','student')->get();
        $teachers=user::where('role','teacher')->get();
        $subjects=Subject::all();
        $classes=Department::all();

        return view('backend.department.studentClass',compact('students','teachers','subjects','classes'));

    }

    public function studentClassStore(Request $request)
    {
        $request->validate([

            'student_id' => 'required',
            'section' => 'required',
            'teacher_id' => 'required',
            'class_id' => 'required',
            'subject_id' => 'required',
        ]);
        
        StudentClass::create([
            'student_id' => $request->student_id,
            'section' => $request->section,
            'teacher_id' => $request->teacher_id,
            'class_id' => $request->class_id,
            'subject_id' => $request->subject_id,
        ]);
        Toastr::success('add on section', 'Student' );
        return redirect()->back();
    }
    public function sectionShort(Request $request)
    {
        $class=Department::all();
        $section=StudentClass::all();
        $subject=Subject::all();
        $all = StudentClass::where('section', $request->section)
                ->where('subject_id', $request->subject_id)
                ->where('class_id', $request->class_id)
                ->get();
        return view('backend.section.allSection',compact('section','all','class','subject'));
    }

    public function deleteStudent($id)
    {
        StudentClass::find($id)->delete();
        Toastr::warning(' delete', 'Student' );
        return redirect()->back();
        
    }
}
