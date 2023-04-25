<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('exam')->get();
        return view('backend.question.list', compact('questions'));
    }

    public function create()
    {
        $exams = Exam::all();
        return view('backend.question.add', compact('exams'));
    }

    public function store(Request $request)
    {
        $data = $request->option;
        $values = implode(',', $data);
        Question::create([
            'question' => $request->question,
            'exam_Id' => $request->exam_id,
            'answer' => $request->answer,
            'option' => $values
        ]);
        return redirect()->back();
    }

    public function show(Request $request, $id)
    {
        $single = Question::with('exam')->where('exam_id', $id)->get();
        return view('backend.question.single_view', compact('single'));
    }

    public function destroy($id)
    {
        $single = Question::find($id)->delete();
        return redirect()->back();
    }
}
