<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <h1>Delete Account</h1>
    <form method="POST" action="{{ route('account.delete') }}">
        @csrf
        <label for="account_number">Account Number:</label><br>
        <input type="text" id="account_number" name="number"><br><br>
    
        
        <button type="submit">Delete Account</button>
    </form>
</body>
</html>
