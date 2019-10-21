<?php
session_start();
$login = ['admin' => 'top-secret'];
$data = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];

if (($_POST['firstName']) == "admin" && ($_POST['secret']) == "top-secret") {
    $_SESSION['login'] = true;
    if (isset($_SESSION['login'])) {
        echo <a href="admin.php">"Pokračovat do administrace"</a>;}
    else {
        echo "Chybné jméno nebo heslo";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Domácí úkol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- Bootstrap core CSS
    <link href="css/bootstrap.min.css" rel="stylesheet"> -->

</head>

<body>
<br>

<div class="container">

    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" name="firstName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Přihlašovací jméno">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="secret" class="form-control" id="exampleInputPassword1" placeholder="Heslo">
        </div>
        <button type="submit" class="btn btn-primary">Přihlásit</button>

    </form>

    <div>

    </div>

</div>
</body>
</html>
