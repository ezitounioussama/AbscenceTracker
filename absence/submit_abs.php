<?php
require_once '../inc/db.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['confirm'])) {
    $student_id = $_POST['student_id'];
    $presence = $_POST['presence'];
    $course_id = $_POST['course_id'];
    $seance_id = $_POST['seance_id'];
    echo $course_id;
    echo $seance_id;
    foreach ($_POST['student_id'] as $index => $student_id) {
        $presence = $_POST['presence'][$index];
        $query = $conn->prepare("INSERT INTO abscence (student_id, seance_id, presence) VALUES (:student_id, :seance_id, :presence)");
        $query->bindParam(':student_id', $student_id);
        $query->bindParam(':seance_id', $seance_id);
        $query->bindParam(':presence', $presence);
        $query->execute();
    }
}
