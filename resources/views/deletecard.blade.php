<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Card</title>
</head>
<body>
    <h1>Delete  Card</h1>
    <form method="POST" action="{{ route('card.delete') }}">
        @csrf
        <label for="Card_number"> Card Number:</label><br>
        <input type="text" id="Card_number" name="number"><br><br>


        <button type="submit">Delete  Card</button>
    </form>
</body>
</html>
