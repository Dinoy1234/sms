<?php

namespace App\Http\Controllers;

use Exception;
use Carbon\Carbon;
use App\Models\Exam;
use App\Models\Subject;
use App\Models\Department;
use App\Models\StudentClass;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams=Exam::all();
        return view('backend.exam.list', compact('exams'));
    }

    public function create(Request $request)
    {
        $classes=Department::all();
        $sections=StudentClass::all();
        $subjects=Subject::all();
        $all = StudentClass::where('section', $request->section)
                    ->where('subject_id', $request->subject_id)
                    ->where('class_id', $request->class_id)
                    ->get();
        return view('backend.exam.add', compact('classes', 'sections', 'subjects', 'all'));
    }

    public function store(Request $request)
    {
        Exam::create([
            'exam_name' => $request->exam_name,
            'exam_type' => $request->exam_type,
            'class_id' => $request->class_id,
            'subject_id' => $request->subject_id,
            'section' => $request->section,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'date' =>Carbon::parse(($request->date))
        ]);
        return redirect()->route('exam_index');
    }

    public function show(Request $request, $id)
    {
        $single = Exam::with('Department','Subject')->find($id);
        return view('backend.exam.single_view', compact('single'));
    }

    public function edit(Request $request, $id)
    {
        $classes=Department::all();
        $sections=StudentClass::all();
        $subjects=Subject::all();
        $all = StudentClass::where('section', $request->section)
                    ->where('subject_id', $request->subject_id)
                    ->where('class_id', $request->class_id)
                    ->get();
        $single = Exam::with('Department','Subject')->find($id);
        return view('backend.exam.edit', compact('classes', 'sections', 'subjects', 'all', 'single'));
    }

    public function update(Request $request, $id)
    {
        $exam = Exam::find($id);
        $exam->update([
            'exam_name' => $request->exam_name,
            'exam_type' => $request->exam_type,
            'class_id' => $request->class_id,
            'subject_id' => $request->subject_id,
            'section' => $request->section,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'date' =>Carbon::parse(($request->date))
        ]);
        return redirect()->route('exam_index');
    }

    public function destroy($id)
    {
        Exam::find($id)->delete();
        return redirect()->back();
    }
}
