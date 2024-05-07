<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Card</title>
</head>
<body>
    <h1>Insert Card</h1>
    <form method="POST" action="{{ route('card.insert') }}">
        @csrf
        <label for="number">Card Number:</label><br>
        <input type="text" id="number" name="number"><br><br>

        <label for="apr">APR:</label><br>
        <input type="text" id="apr" name="apr"><br><br>

        <label for="status">Status:</label><br>
        <select id="status" name="status">
            <option value="checking">Checking</option>
            <option value="saving">Saving</option>
        </select><br><br>

        <button type="submit">Insert Card</button>
    </form>
</body>
</html>
