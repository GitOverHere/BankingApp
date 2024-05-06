<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
</head>
<body>
    <h1>Update Account</h1>
    <form method="POST" action="{{ route('accounts.store') }}">
        @csrf
        <label for="account_number">Account Number:</label><br>
        <input type="text" id="account_number" name="account_number"><br><br>
    
        </select><br><br>
        
        <button type="submit">Update Account</button>
    </form>
</body>
</html>
