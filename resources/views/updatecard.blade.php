<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Card</title>
</head>
<body>
    <h1>Update Card</h1>
    <form method="POST" action="{{ route('card.update') }}">
        @csrf
        <label for="number">Account Number:</label><br>
        <input type="text" id="accountnumber" name="accountnumber" required><br><br>
    
        <label for="number">Card Number</label><br>
        <input type="text" id="cardnumber" name="cardnumber" required><br><br>


        <label for="number">Expiration Date</label><br>
        <input type="text" id="expires" name="expires" required><br><br>


        <label for="number">CVC</label><br>
        <input type="text" id="cvc" name="cvc" required><br><br>

        <button type="submit">Update Card</button>
    </form>
</body>
</html>
