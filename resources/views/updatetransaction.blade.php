<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Transaction</title>
</head>
<body>
    <h1>Update Transaction</h1>
    <form method="POST" action="{{ route('transaction.update') }}">
        @csrf
        <label for="transaction_number">Transaction Number:</label><br>
        <input type="text" id="transaction_number" name="number"><br><br>
    
        <label for="transactr">Amount:</label><br>
        <input type="text" id="transaction_number" name="number"><br><br>

        <label for="cars">Credit/Debit</label>

    <select name="type" id="type">
  <option value="credit">Credit</option>
  <option value="debit">Debit</option>
  
    </select>
        <button type="submit">Update Transaction</button>
    </form>
</body>
</html>