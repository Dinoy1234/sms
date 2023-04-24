<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        return view('backend.question.list');
    }

    public function create()
    {
        $exams = Exam::all();
        return view('backend.question.add', compact('exams'));
    }

    public function store(Request $request)
    {
        $questions = Question::create([
            'question' => $request->question,
            'exam_id' => $request->exam_id,
            'answer' => $request->answer,
            // foreach ($request->option as $opt) {
            //         'option' => $opt
            // }
        ]);
        return redirect()->back();
    }

    public function show(Question $question)
    {
        //
    }

    public function edit(Question $question)
    {
        //
    }

    public function update(Request $request, Question $question)
    {
        //
    }

    public function destroy(Question $question)
    {
        //
    }
}
