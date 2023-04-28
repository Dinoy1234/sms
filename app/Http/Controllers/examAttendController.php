<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\examAttend;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Brian2694\Toastr\Facades\Toastr;

class examAttendController extends Controller
{
   public function attendExam($id){
    $single = Question::with('exam')->where('exam_id', $id)->get();
    return view('backend.exam.attendExam',compact('single'));
   }

   public function attendExamStore(Request $request){
    // dd($request->all());
    $answer=count($request->answer);
    // dd(count($answer));
    for ($i = 0; $i < $answer; $i++){
        $saveRecord =([
            'student_id' => $request->student_id,
            'exam_id' => $request->exam_id,
            'answer' => $request->answer[$i]
        ]);
        // dd($saveRecord);
        DB::table('exam_attends')->insert($saveRecord);
        Toastr::success(' Answer submit successfully.', 'Exam' );
        
    }
    return redirect()->route('student.exam.list');
    


    
   }
}
