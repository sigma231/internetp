<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
 </head>
<body>
  <div class="row" style="margin:40px;">
<div class="input-group">
<form method="post" action="/search_student">
    {{csrf_field()}}
    <label class="form-control" for="search_term">Search: </label> 
    <input class="form-control"type="text" name="Student_Number" placeholder="search_term">  
    <input class="form-control"type="submit" class="btn btn-group">
</form>
</div>
</div>

</body>