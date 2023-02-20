<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../inc/db.php');

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT s.fullname, s.email, g.name AS group_name
FROM students AS s
INNER JOIN groupes AS g ON s.id_groupe = g.id
WHERE s.id_groupe = ?");
$stmt->execute([$id]);

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Return students as JSON
header('Content-Type: application/json');
echo json_encode($students);
