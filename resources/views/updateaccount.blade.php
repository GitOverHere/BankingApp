<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
</head>
<body>
    <h1>Update Account</h1>
    <form method="POST" action="{{ route('account.update') }}">
        @csrf
        <label for="number">Account Number:</label><br>
        <input type="text" id="number" name="number"><br><br>
    
        <label for="number">apr:</label><br>
        <input type="text" id="apr" name="apr"><br><br>

        <button type="submit">Update Account</button>
    </form>
</body>
</html>
