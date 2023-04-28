<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Department;
use Mockery\Matcher\Subset;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class SubjectController extends Controller
{
    public function index()
    {

        $subject=Subject::all();
        return view('backend.subject.list',compact('subject'));
    }

    public function create()
    {
        $class=Department::all();
        return view('backend.subject.add',compact('class'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'subject_name' => 'required',
            

        ]);
        Subject::create([
            'subject_name' => $request->subject_name,
            'class_id' => $request->class_id,
            'subject_code' => $request->subject_code,
        ]);
        Toastr::success('create successfully', 'Subject');
        return redirect()->route('subject.index');
    }

    public function show(Subject $subject)
    {
        //
    }

    public function edit(Subject $subject)
    {
        return view('backend.subject.edit');
    }

    public function update(Request $request, Subject $subject)
    {
        //
    }

    public function destroy(Subject $subject)
    {
        //
    }
}
