<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <!--<![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 3vh;
            background-color: white;
            border-radius: 12px;
        }

        .warning {
            color: red;
        }

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        h2 {
            color: #555;
            margin-bottom: 20px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #0056b3;
        }

        .color {
            width: 100%;
            height: 2%;
            background-color: #013266;
            padding: 1vh;

        }

    </style>
</head>
<body>

<div class="container">
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
  <div class="color">


    </div>
    <h1>Admin Dashboard</h1>

    <p class="warning">WARNING: Admin eyes only!!!</p>

    <h2>Admin Actions</h2>
    <ul>
        <li><a href="{{ route('admin.account.insert') }}">Insert Account</a></li>
        <li><a href="{{ route('admin.account.update') }}">Update Account</a></li>
        <li><a href="{{ route('admin.account.delete') }}">Delete Account</a></li>
        <li><a href="{{ route('admin.account.search') }}">Search Account</a></li>
        <li><a href="{{ route('admin.card.insert') }}">Insert Card</a></li>
        <li><a href="{{ route('admin.card.update') }}">Update Card</a></li>
        <li><a href="{{ route('admin.card.delete') }}">Delete Card</a></li>
        <li><a href="{{ route('admin.card.search') }}">Search Card</a></li>
        <li><a href="{{ route('admin.transaction.insert') }}">Insert Transaction</a></li>
        <li><a href="{{ route('admin.transaction.update') }}">Update Transaction</a></li>
        <li><a href="{{ route('admin.transaction.delete') }}">Delete Transaction</a></li>
        <li><a href="{{ route('admin.transaction.search') }}">Search Transaction</a></li>
        <li><a href="{{ route('admin.transactions.export') }}">Export Transactions</a></li>
        <li><a href="{{ route('admin.statement.regenerate') }}">Delete and Regenerate Statement</a></li>
    </ul>
</div>
<script src="" async defer></script>
</body>
</html>
