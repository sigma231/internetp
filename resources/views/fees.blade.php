<!DOCTYPE html>
<head>
    </head>
<body>
 <form method="post" action="/make_payment">
        {{csrf_field()}}
     <label for="student">Student ID</label>
     <input type="text" name="student_id">
     <label for="address">Date Of Payment</label>
     <input type="date" name="date_of_payment">
     <label for="date_of_birth">Amount</label>
     <input type="text" name="amount">
     
     <input type="submit"> 
     </form>
</body>