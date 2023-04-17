<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $class=Department::orderBy('id','ASC')->get();
        return view('backend.department.list',compact('class'));
    }

    public function create()
    {
        return view('backend.department.add');
    }

    public function store(Request $request)
    {
        Department::create([
            'class' => $request->class,
        ]);
        return redirect()->route('department.index');
    }

    public function edit(Department $department)
    {
        return view('backend.department.edit');
    }

    public function destroy(Department $department,$id)
    {
        Department::find($id)->delete();

        return redirect()->back();
    }
}
