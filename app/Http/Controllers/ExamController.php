<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exam=Exam::all();
        return view('backend.exam.list',compact('exam'));
    }

    public function create()
    {
        return view('backend.exam.add');
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Exam $exam)
    {
        //
    }

    public function edit(Exam $exam)
    {
        //
    }

    public function update(Request $request, Exam $exam)
    {
        //
    }

    public function destroy(Exam $exam)
    {
        //
    }
}
