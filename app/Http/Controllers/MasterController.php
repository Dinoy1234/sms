<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index()
    {
        return view('backend.admin.dashboard_content');
    }
    public function profile($id)
    {
        return view('backend.profile.profile');
    }
}
