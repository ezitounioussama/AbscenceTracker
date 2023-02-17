<?php

require_once('db.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$id = $_GET['id'];

$query = "DELETE FROM users WHERE id = $id";

try {
    $conn->exec($query);
    echo "Record deleted successfully";
    echo "<a href='/'>back</a>";
} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
