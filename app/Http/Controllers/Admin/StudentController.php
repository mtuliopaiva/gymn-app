<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentsReport(Request $request)
    {
        return view('admin.students.report');
    }
}
