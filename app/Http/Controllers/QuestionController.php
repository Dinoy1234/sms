<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class QuestionController extends Controller
{
    public function index()
    {
        // $questions = Question::with('exam')->where('teacher_id',auth()->user()->id)->get();
        $questions = exam::where('teacher_id',auth()->user()->id)->get();
        // dd($questions);
        return view('backend.question.list', compact('questions'));
    }

    public function create()
    {
        $exams = Exam::where('teacher_id',auth()->user()->id)->get();
        return view('backend.question.add', compact('exams'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([

            'question' => 'required',
            'exam_id' => 'required',
            'answer' => 'required',
            'option' => 'required',

        ]);
        $data = $request->option;
        $values = implode(',', $data);
        Question::create([
            'teacher_id'=> auth()->user()->id,
            'question' => $request->question,
            'exam_Id' => $request->exam_id,
            'answer' => $request->answer,
            'option' => $values
        ]);
        Toastr::success(' create successfully.', 'Question' );
        return redirect()->back();
    }

    public function show(Request $request, $id)
    {
        $single = Question::with('exam')->where('exam_id', $id)->get();
        // dd($single);
        return view('backend.question.single_view', compact('single'));
    }

    public function destroy($id)
    {
        $single = Question::find($id)->delete();
        Toastr::warning('Deleted.', 'Question' );
        return redirect()->back();
    }
}
