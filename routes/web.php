<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::post('/add_student', 'studentController@createStudent');
Route::post('/make_payment', 'feesController@makePayment');
Route::get('/student/{id}', 'studentController@findStudent');
Route::get('/allpayments', 'feesController@allStudentFees');

Route::post('/search_student', 'feesController@searchStudentPayments');
Route::get('all_payments', 'feesController@showAll');
Route::get('/student', function () {
    return view('student');
});
Route::get('/search' , function(){
    return view('search');
});
Route::get('/fees', function(){
    return view('fees');
});