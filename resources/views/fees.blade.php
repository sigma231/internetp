<!DOCTYPE html>
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
<body>
<a href="/search">Search</a>
<a href="/all_payments">All Payments</a>
<div class="input-group">
 <form method="post" action="/make_payment">
        {{csrf_field()}}
     <label for="student" class="form-control">Student ID</label>
     <input type="text" name="student_id" class="form-control">
     <label for="address" class="form-control">Date Of Payment</label>
     <input type="date" name="date_of_payment" class="form-control">
     <label for="date_of_birth" class="form-control">Amount</label>
     <input type="text" name="amount" class="form-control">
     
     <input type="submit" class="btn btn-default"> 
     </form>
     </div>
</body>