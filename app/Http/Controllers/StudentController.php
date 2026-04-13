<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function index(){
        $students = Student::latest()->get();
        return view('view', compact('students'));
    }


    function store(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();
        return redirect('/student');
    }


    function student(){
        return view('student');
    }

    function view(){
        $students = Student::all();
        return view('view', compact('students'));
    }


    function createview(){
        return view('create');
    }


    function editview($id){
        $student = Student::find($id);
        return view('edit', compact('student'));
    }

    function create(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();
        return redirect('/student');
    }

    
    function edit(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();
        return redirect('/student');
    }
    
    function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect('/student');
    }

}
