<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function instructorsReport(Request $request)
    {
        $instructors = Instructor::with('user')->paginate(10);
        return view('admin.instructors.report', compact('instructors'));
    }
    public function instructorsRegister(Request $request)
    {
        return view('admin.instructors.register');
    }
    public function postInstructors(Request $request)
    {
        $data = $request->only(['first_name', 'last_name', 'email', 'speciality']);
        $user = User::where('email', $data['email'])->first();

        if (isset($user)) {
            $instructor = new Instructor();
            $instructor->user_id = $user->id;
            $instructor->specialty = $data['speciality'];
            $instructor->save();
            return redirect()->route('instructors.register')->with('success', 'Usuário cadastrado com sucesso!');
        } else {
            return redirect()->route('instructors.register')->with('error', 'Falha ao cadastrar o usuário. Por favor, tente novamente.');
    }
}
}
