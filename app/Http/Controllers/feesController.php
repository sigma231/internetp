<?php

namespace App\Http\Controllers;
use App\fees;
use Illuminate\Http\Request;

class feesController extends Controller
{
    //
     public function makePayment(Request $request){
       
        $fees_payment = new fees;
        $fees_payment->student_number = $request->input('student_id');
        $fees_payment->date_of_payment = $request->input('date_of_payment');
        $fees_payment->amount = $request->input('amount');
        
        $fees_payment->save();
        
        
    }
    public function allstudentfees()
    {
        $fee = fees::all();
        return view('allfees', ['fee' => $fee]);
    }
    public function searchStudentPayments(){
        $fee = fees::all()->where('student_number',  request('Student_Number'));
        if(count($fee) > 0)
        {
            return view('searchresults', ['fee' => $fee]);
        }
        else
        {
            return redirect('/')->withFail('No such record exists');  
        }
        
    }
    public function showAll(){
        $fee = fees::all();
        return view('allpayments', ['fee' => $fee]);
    }
}
