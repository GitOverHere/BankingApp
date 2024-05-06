<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Bank Statement</title>
</head>
<body>
    <h1>delete Bank Statement</h1>
    <form method="POST" action="{{ route('BankStatement.delete') }}">
        @csrf
        <label for="statement_number">Bank Statement Number:</label><br>
        <input type="text" id="statement_number" name="number"><br><br>
    
        
        <button type="submit">Delete Bank Statement</button>
    </form>
</body>
</html>
