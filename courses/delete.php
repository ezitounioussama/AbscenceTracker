<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../inc/db.php');

$id = $_GET['id'];

$query = "DELETE FROM courses WHERE id = $id";

try {
    $conn->exec($query);
    echo "Record deleted successfully";
    header('location:../courses');
} catch (PDOException $e) {
    echo "error: " . $e->getMessage();
}
