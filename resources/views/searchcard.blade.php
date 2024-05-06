<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Cards</title>
</head>
<body>
    <h1>Search Cards</h1>
    <form method="POST" action="{{ route('account.search') }}">
        @csrf
        <label for="name">name</label><br>
        <input type="text" id="name" name="name"><br><br>
    
        <label for="accountnumber">accountnumber</label><br>
        <input type="text" id="accountnumber" name="accountnumber"><br><br>
    
        
        <button type="submit">Search Cards</button>
    </form>
</body>
</html>
