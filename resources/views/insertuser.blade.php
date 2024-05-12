<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="{{ route('admin.insertuser') }}">
    @csrf <!-- Add CSRF protection -->

    <h1>Insert User</h1>

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

    <label for="street_address">Street Address:</label>
    <input type="text" id="street_address" name="street_address"><br>

    <label for="city">City:</label>
    <input type="text" id="city" name="city"><br>

    <label for="region">Region:</label>
    <input type="text" id="region" name="region"><br>

    <label for="postalcode">Postal Code:</label>
    <input type="text" id="postalcode" name="postalcode"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br> <!-- Corrected input type for password -->

    <button type="submit">Submit</button>
</form>
</body>
</html>
