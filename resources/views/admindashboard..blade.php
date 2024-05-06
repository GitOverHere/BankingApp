<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <h1>Admin Dashboard</h1>

        <p class="warning" style="color: red;">WARNING: Admin eyes only!!!</p>
        
        <h2>
           <a href="{{ route('admin.account.insert') }}">Insert Account</a>
<a href="{{ route('admin.account.update') }}">Update Account</a>
<a href="{{ route('admin.account.delete') }}">Delete Account</a>
<a href="{{ route('admin.account.search') }}">Search Account</a>
<a href="{{ route('admin.card.insert') }}">Insert Card</a>
<a href="{{ route('admin.card.update') }}">Update Card</a>
<a href="{{ route('admin.card.delete') }}">Delete Card</a>
<a href="{{ route('admin.card.search') }}">Search Card</a>
<a href="{{ route('admin.transaction.insert') }}">Insert Transaction</a>
<a href="{{ route('admin.transaction.update') }}">Update Transaction</a>
<a href="{{ route('admin.transaction.delete') }}">Delete Transaction</a>
<a href="{{ route('admin.transaction.search') }}">Search Transaction</a>
<a href="{{ route('admin.transactions.export') }}">Export Transactions</a>
<a href="{{ route('admin.statement.regenerate') }}">Delete and Regenerate Statement</a>



        <script src="" async defer></script>
    </body>
</html>