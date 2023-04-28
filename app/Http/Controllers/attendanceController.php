<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Subject;
use App\Models\Attendance;
use App\Models\Department;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class attendanceController extends Controller
{
    public function attendance(Request $request)
    {
        // dd(auth()->user()->id);
        $class=Department::all();
        $section=StudentClass::all();
        $subject=Subject::all();
        $all = StudentClass::where('section', $request->section)
                    ->where('subject_id', $request->subject_id)
                    ->where('class_id', $request->class_id)
                    ->where('teacher_id',auth()->user()->id)
                    ->get();
        return view('backend.attendance.attendance',compact('class','section','subject','all'));
    }

    public function attendanceStore(Request $request){
        $student=$request->student_id;
        for ($i = 0; $i < count($student); $i++) {
            $saveRecord = ([
                'class_id' => $request->class_id[$i],
                'student_id' => $request->student_id[$i],
                'section' => $request->section[$i],
                'subject_id'=>$request->subject_id[$i],
                'attendance' => $request->attendance[$i],
                'date' =>Carbon::parse(Carbon::now()->format('Y-m-d'))
            ]);
            DB::table('attendances')->insert($saveRecord);
        }
        Toastr::success('submit successfully', 'attendance', );
        return redirect()->back();
    }


    public function attendanceShow(Request $request){
        $class=Department::all();
        $section=StudentClass::all();
        $subject=Subject::all();
        $date=Carbon::parse(($request->date));
        $all = Attendance::where('section', $request->section)
        ->where('subject_id', $request->subject_id)
        ->where('class_id', $request->class_id)
        ->where('date',$date)
        ->get();
        return view('backend.attendance.attendanceShow',compact('all','class','section','subject'));
    }
}
