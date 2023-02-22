<?php
require_once '../inc/db.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['confirm'])) {
    $student_ids = $_POST['student_id'];
    $presences = $_POST['presence'];
    $course_id = $_POST['course_id'];
    $seance_id = $_POST['seance_id'];
    foreach ($student_ids as $index => $student_id) {
        $presence = $presences[$index];
        $query = $conn->prepare("INSERT INTO abscence (id_student, presences, id_course, id_seance) VALUES (:student_id, :presence, :course_id, :seance_id)");
        $query->bindParam(':student_id', $student_id);
        $query->bindParam(':presence', $presence);
        $query->bindParam(':course_id', $course_id);
        $query->bindParam(':seance_id', $seance_id);
        $query->execute();
    }
}
