<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{route('user.search')}}">
<h1> Search For User</h1>

<input type="text" name="first_name">

<input type="text" name="middle_name">

<input type="text" name="last_name">

<input type="text" name="email">

<input type="text" name="phone">

<input type="text" name="street_address">

<input type="text" name="city">


<input type="text" name="region">

<input type="text" name="postalcode">


<input type="type" name="password">


<button>Submit</button>
</form>




</body>
</html>
