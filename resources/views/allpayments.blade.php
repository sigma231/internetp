<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    </head>
<?php $total = 0  ?>
<body>
        <div class="col-md-4 text-center">
            <h1>Student Payments</h1><br>
            <table class="table">
                <thead>
                    <tr>
                        <td>Student Number</td>
                        
                        <td>Date of Payment</td>
                        <td>Amount</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fee as $fee)
                        <tr>
                            <td>{{$fee->student_number}}</td>
                            <td>{{$fee->date_of_payment}}</td>
                            <td>{{$fee->amount}}</td>
                            <td><a href="/individualfeespaid/{{ $fee->studentnumber }}">Fees Paid</td>
                        </tr>
                        
                        <?php  $total += $fee->amount ?>
                        
                    @endforeach
                </tbody>
            </table>
            <div class="form-group">
                <label for="no">Total Fees Paid</label>
                <input type="number" class="form-control"  value="{{ $total }}" disabled>
            </div>
            <a class="btn btn-default" href="/">Go Back</a>

        </div>        
    </body>