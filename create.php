<?php
require_once('db.php');
$sql = "INSERT INTO users (username,password)
VALUES ( '$name', '$passwd')";
$conn->exec($sql);
header('location:index.php');
