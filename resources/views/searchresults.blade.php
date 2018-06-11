<?php $total = 0  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>{{config('app_name', 'Laravel CAT')}}</title>
    </head>
    <body>
        <div class="container text-center">
            @if(count($fee) > 0)
            <h1>Individual Student Payments</h1><br>
            <table class="table">
                <thead>
                    <tr>
                        <td>Student Number</td>
                        <td>Student Name</td>
                        <td>Date of Payment</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fee as $fee)
                        <tr>
                            <td>{{$fee->student_number}}</td>
                            <td>{{$fee->dateofpayment}}</td>
                            <td>{{$fee->amount}}</td>
                        </tr>
                        
                        <?php  $total += $fee->amount ?>
                        
                    @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <label for="no">Total Fees Paid</label>
                <input type="number" class="form-control"  value="{{ $total }}" disabled>
            </div>
            @else
            <h1>No record of any fee payment yet</h1>
            <a class="btn btn-default" href="/fee">Add a fee payment</a>
            @endif
            <a class="btn btn-default" href="/">Home</a>
        </div>        
    </body>
</html>