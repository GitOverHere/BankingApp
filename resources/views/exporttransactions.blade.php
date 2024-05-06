<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export All Transactions</title>
</head>
<body>
    <h1>Export All Transactions</h1>
    <form method="POST" action="{{ route('transactionhistory.export') }}">
        @csrf
        <label for="number">Account Number:</label><br>
        <input type="text" id="number" name="number"><br><br>
        
        
        <label for="start">Start date:</label>

<input type="date" id="start" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" />

<label for="end">Start date:</label>

<input type="date" id="end" name="trip-start" value="2018-07-22" min="2018-01-01" max="2018-12-31" />

<label for="export-all">Export All Transactions</label>
<input type="checkbox" value="export-all">


        
        <button type="submit">Export All Transactions</button>
    </form>
</body>
</html>
