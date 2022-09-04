<?php
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    mysqli_close($conn);
    exit("Method not allowed");
}

$name = $_POST["name"];
$matriculation = $_POST["matriculation"];
$password = $_POST["password"];

if (empty($name) || empty($matriculation) || empty($password)) {
    mysqli_close($conn);
    exit("Missing parameters");
}

$sql = "INSERT INTO users (name, matriculation, password) VALUES ('$name', '$matriculation', '$password')";

mysqli_query($conn, $sql);

mysqli_close($conn);

header("location: ../login.php");
