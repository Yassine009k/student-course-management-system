<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function add_student(Request $req)
    {
        $validation=$req->validate([
            'nom_complet'=>'string|required',
            'CIN'=>'string|required|unique:students',
            'email'=>'email|required|unique:students',
            'dateNaissance'=>'date|required',
        ]);
        Student::create($validation);
        return to_route('student.get');
    }

    public function getallStudents(){
        $students=Student::all();
        return view('user',['students'=>$students]);
    }

    public function getStudentById(int $id){
        $student=Student::find($id);
        if ($student) {
            return view('profile',['student'=>$student,'courses'=>$student->courses]);
        }
        return back()->withErrors('student not found');
    }

    public function edit(int $id){
        $student=Student::find($id);
        if ($student) {
            return view('register',compact('student'));
        }
        return back()->with('errore','not foude student');
    }

    public function updateStudent(Request $req,int $id){
        $validation=$req->validate([
            'nom_complet'=>'string|required',
            'CIN'=>['string','required',Rule::unique('students')->ignore($id)],
            'email'=>['string','email','required',Rule::unique('students')->ignore($id)],
            'dateNaissance'=>'date|required',
        ]); 
        $student=Student::find($id);
        if ($student) {
            $student->update($validation);
            return to_route('student.get')->with('success','updated done');
        }
        return back()->withErrors('student not found');
    }


    public function deleteStudent(int $id){
        $student=Student::find($id);
        if ($student) {
            $student->delete();
            return to_route('student.get')->with('success','deleted done');
        }
        return back()->withErrors('student not found');
    }

}
