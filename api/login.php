<?php
require "connect.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Method not allowed";
    exit();
}

$matriculation = $_POST["matriculation"];
$password = $_POST["password"];

if (empty($matriculation) || empty($password)) {
    echo "Missing parameters";
    exit();
}

$sql = "SELECT matriculation, password FROM users WHERE matriculation = '$matriculation' AND password = '$password'";

$user = mysqli_query($conn, $sql);

mysqli_close($conn);

if (mysqli_num_rows($user) > 0) {
    $_SESSION["loggedin"] = true;
    header("location: ../index.php");
} else {
    echo "Matriculation or password incorrect";
}
