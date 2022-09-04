<?php
$conn = mysqli_connect("localhost", "root", "", "php_auth", 3306);

if (!$conn) {
    exit("Connection failed");
}
