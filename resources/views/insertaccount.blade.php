<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Account</title>
</head>
<body>
    <h1>Insert Account</h1>
    <form method="POST" action="{{ route('account.insert') }}">
        @csrf

        <label for="userid">User ID:</label><br>
        <input type="text" id="userid" name="userid"><br><br>


        <label for="account_number">Account Number:</label><br>
        <input type="text" id="number" name="number"><br><br>

        <label for="apr">APR:</label><br>
        <input type="text" id="apr" name="apr"><br><br>

        <label for="type">Status:</label><br>
        <select id="type" name="type">
            <option value="checking">Checking</option>
            <option value="saving">Saving</option>
        </select><br><br>
        <button type="submit">Insert Account</button>
    </form>
</body>
</html>
