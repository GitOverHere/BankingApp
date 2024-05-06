<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Accounts</title>
</head>
<body>
    <h1>Search Accounts</h1>
    <form method="POST" action="{{ route('account.search') }}">
        @csrf
        <label for="name">name</label><br>
        <input type="text" id="name" name="name"><br><br>
    
        <label for="userid">userid</label><br>
        <input type="text" id="userid" name="userid"><br><br>
    
        
        <button type="submit">Search Accounts</button>
    </form>
</body>
</html>
