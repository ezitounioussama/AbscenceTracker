<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../inc/db.php');

$id = $_GET['id'];

try {
    $conn->beginTransaction();

    $conn->exec("DELETE FROM seance WHERE id = $id");
    $conn->commit();
    echo "Record deleted successfully";
    header('location:../seance');
} catch (PDOException $e) {
    $conn->rollback();
    echo "Error deleting record: " . $e->getMessage();
}
