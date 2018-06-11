<!DOCTYPE html>
<head>
    </head>
<body>
 <form method="post" action="/add_student">
 {{ csrf_field() }}
     <label for="student">Student Number</label>
     <input type="number" name="student_number">
     <label for="student">Student name</label>
     <input type="text" name="student_name">
     <label for="address">Address</label>
     <input type="text" name="address">
     <label for="date_of_birth">Date Of Birth</label>
     <input type="date" name="date_of_birth"> 
     <input type="submit">
     </form>
</body>