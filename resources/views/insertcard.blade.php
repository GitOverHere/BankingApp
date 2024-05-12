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
		
		<label for="accountnumber">Account Number:</label><br>
        <input type="text" id="accountnumber" name="accountnumber"><br><br>
		
		
        <label for="cardnumber">Card Number:</label><br>
        <input type="text" id="cardnumber" name="cardnumber"><br><br>

        <label for="cvc">cvc:</label><br>
        <input type="text" id="cvc" name="cvc"><br><br>

		<label for="expires">Expiration date:</label>

		<input type="date" id="expiration-date" name="expiration-date" value="2018-07-22" min="2018-01-01" max="2018-12-31" />
		
        <br>
		<br>

        <button type="submit">Insert Card</button>
    </form>
</body>
</html>
