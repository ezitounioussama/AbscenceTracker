<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../inc/db.php';

if (isset($_POST['submit'])) {
    $groupe_name = $_POST['groupe_name'];

    // handle file upload

    $stmt = "INSERT INTO groupes (name) VALUES ('$groupe_name')";
    $conn->exec($stmt);

    header('Location: index.php');
    exit();
}
