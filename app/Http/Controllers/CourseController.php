<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(int $id)
    {
        return view('formCoures',compact('id'));
    }

    public function Add_course(Request $req,int $id)
    {
        $student=Student::find($id);
        if ($student) {
            $coures=Course::create(['nom_course'=>$req->nom_course]);
            $student->courses()->attach($coures->id);
            return to_route('student.get')->with('success','course added successfully');
        }
        return back()->withErrors('student not found');
    }

    public function deletCoures(int $id)
    {
        $coures=Course::find($id);
        if ($coures) {
            $coures->delete();
            $coures->students()->detach($coures->id);
            return back()->with('success','course deleted successfully');
        }
    }
}
