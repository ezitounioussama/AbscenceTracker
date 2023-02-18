<?php
include('../inc/db.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $fullName = $_POST['fullName'];
    $id_course = $_POST['id_course'];
    $id_groupe = $_POST['id_groupe'];
    $sql = "INSERT INTO students (email,fullname,id_course,id_groupe)
VALUES ('$email', '$fullName',$id_course, $id_groupe)";
    $conn->exec($sql);
    header('location:../students/');
}
