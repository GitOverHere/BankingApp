<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
</head>
<body>
    <h1>Create Account</h1>
    <form method="POST" action="{{ route('accounts.store') }}">
        @csrf
        <label for="account_number">Account Number:</label><br>
        <input type="text" id="account_number" name="account_number"><br><br>
        
        <label for="apr">APR:</label><br>
        <input type="text" id="apr" name="apr"><br><br>
        
        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="checking">Checking</option>
            <option value="saving">Saving</option>
        </select><br><br>
        
        <button type="submit">Create Account</button>
    </form>
</body>
</html>
