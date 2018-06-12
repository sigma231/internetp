<?php

namespace App\Http\Controllers;
use App\student;
use Illuminate\Http\Request;


class studentController extends Controller
{
    //
    public function createStudent(Request $request){
        $validatedData = $request->validate([
            'student_id' => 'required|integer',
            'student_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
        ]);
        $student = student::all()->where('studentnumber', request('student_id'));
        if(count($student)>0)
        {   
            return redirect::to('/student')->with("Message","The student number entered already exists");
        }
        $student = new student;
        $student->student_number = $request->input('student_number');
        $student->full_name = $request->input('student_name');
        $student->date_of_birth = $request->input('date_of_birth');
        $student->address = $request->input('address');
        
        $student->save();
        return ('studentadded');
        
    }
    public function searchStudent(Request $request){
        $student = new student;
        
        
    }
}
