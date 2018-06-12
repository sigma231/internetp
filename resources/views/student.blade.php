<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
<body>
    <a href="/">Home Page</a>
    <div class="input-group col-md-4">
        
 <form method="post" action="/add_student">
 {{ csrf_field() }}
     <label for="student" class="form-control">Student Number</label>
     <input type="number" name="student_number" class="form-control">
     <label for="student" class="form-control">Student name</label>
     <input type="text" name="student_name" class="form-control">
     <label for="address" class="form-control">Address</label>
     <input type="text" name="address" class="form-control">
     <label for="date_of_birth" class="form-control"> Date Of Birth</label>
     <input type="date" name="date_of_birth" class="form-control"> 
     <input type="submit" class="btn btn-default">
     </form>
     </div>
</body>
