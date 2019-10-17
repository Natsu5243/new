<?php
include_once 'Database.php';

$username = $_POST['username'];
$password = $_POST['psw'];
$email = $_POST['email'];



$sql = "INSERT INTO user (myusername, mypassword , Email)
VALUES('$username','$password','$email');";

mysqli_query ($conn, $sql);

header("Location: ../NihonTabemono/index.php");