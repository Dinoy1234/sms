<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=User::where('role','student')->get();
        return view('backend.student.list',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.student.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
        
       
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/students', $image_name);
        }
// dd($image_name);
       User::create([

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
    //    dd($a);
       
       return redirect()->route('student.index')
            ->with('success', 'Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student,$id)
    {
        $students=User::find($id);
        return view('backend.student.single_view',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student,$id)
    {
        $student=User::find($id);
        return view('backend.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student,$id)
    {
       
        $image_name = null;
        if ($request->hasfile('image')) {
            $image_name = date('Ymdhis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('/uploads/students', $image_name);
        }
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
        return redirect()->route('student.index')
            ->with('success', 'Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
  
    public function delete($id){
        User::find($id)->delete();
        
        return redirect()->back();
    }

    public function approved($id){

        $student=User::find($id);
        $student->update([
            'status'=>'Approved'
        ]);

        return redirect()->back();
    }
    
}
