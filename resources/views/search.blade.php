<!DOCTYPE html>
<body>
<form method="post" action="/search_student">
    {{csrf_field()}}
    <label for="search_term">Search: </label> 
    <input type="text" name="Student_Number" placeholder="search_term">  
    <input type="submit">
</form>
</body>