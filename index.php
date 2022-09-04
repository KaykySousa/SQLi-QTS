<?php
session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: register.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />

</head>

<body>
    <div class="min-vh-100 bg-dark d-flex flex-column justify-content-center align-items-center px-4">
        <div class="d-flex flex-column gap-2">
            <h1 class="text-light">Usuário Autenticado</h1>
            <a class="w-100 btn btn-primary" href="api/logout.php">Logout</a>
        </div>
    </div>
</body>

</html>