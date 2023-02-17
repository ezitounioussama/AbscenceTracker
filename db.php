<?php
$servername = "localhost";
$username = "oussama";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=crudTest", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";


    $name = $_POST['username'];
    $passwd = $_POST['password'];



    if (isset($_POST['delete'])) {
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
