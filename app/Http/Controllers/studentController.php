<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;


class studentController extends Controller
{
    //
    public function createStudent(Request $request){
        $student = new student;
        $student->student_number = $request->input('student_number');
        $student->full_name = $request->input('student_name');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->address = $request->input('address');
        
        $student->save();
        
    }
    public function searchStudent(Request $request){
        $student = new student;
        
        
    }
}
