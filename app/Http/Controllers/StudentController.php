<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    function index()
    {
        return view('student');
    }
    function saveData(Request $request)
    {
        // first way to save data
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email',
            'studentId' => 'required'
        ]);

        try {

            $student = new Student();
            $student->fname = $request->get('fname');
            $student->lname = $request->get('lname');
            $student->email = $request->get('email');
            $student->studentId = $request->get('studentId');
            $student->save();


            //  secondary method to save data
            // $save = Student::create([
            //     'fname' => $request->get('fname'),
            //     'lname' => $request->get('lname'),
            //     'email' => $request->get('email'),
            //     'studentId' => $request->get('studentId')
            // ]);
            //  third method to save data
            // Student::create($request->all());
            return redirect('/student')->with('success', 'Student data saved successfully!');

        } catch (\Throwable $th) {
            return redirect('/student')->with('error', $th->getMessage());
        }

    }


    function getData()
    {
        $students = Student::all();
        dd($students);
        return view('selectStudent', compact('students'));
    }
}
