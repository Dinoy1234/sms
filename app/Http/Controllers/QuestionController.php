<?php

namespace App\Http\Controllers;

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
        return view('backend.question.add');
    }

    public function store(Request $request)
    {
        //
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
