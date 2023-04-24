<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $questions = Question::create([
            'question' => $request->question,
            'exam_Id' => $request->exam_id,
            'answer' => $request->answer,
            'option' => $values
        ]);
        // dd($questions);
        return redirect()->back();
    }

    public function show(Request $request, $id)
    {
        $single = Question::with('exam')->where('exam_id', $id)->get();
        $options = DB::table('questions')->pluck('option')->toArray();
        return view('backend.question.single_view', compact('single', 'options'));
    }

    public function destroy(Question $question)
    {
        //
    }
}
