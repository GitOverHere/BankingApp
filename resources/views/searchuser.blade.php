<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Search</title>
</head>
<body>
<form method="POST" action="{{route('admin.searchuser')}}">
<h1> Search For User</h1>


 <label for="id">:</label>
    <input type="text" id="id" name="id"><br>



<label for="first_name">First Name:</label>
    <input type="text" id="first_name" name="first_name"><br>

    <label for="middle_name">Middle Name:</label>
    <input type="text" id="middle_name" name="middle_name"><br>

    <label for="last_name">Last Name:</label>
    <input type="text" id="last_name" name="last_name"><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email"><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone"><br>



<button>Submit</button>
</form>




</body>
</html>
