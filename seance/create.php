<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include('../inc/db.php');


if (isset($_POST['submit'])) {

    $id_groupe = $_POST['id_groupe'];
    $id_course = $_POST['id_course'];
    $date = $_POST['date'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];
    $sql = "INSERT INTO seance (id_course,id_groupe,date,start_seance,end_seance)
VALUES ($id_course, $id_groupe,'$date', '$time_start','$time_end')";
    $conn->exec($sql);
    header('location:../seance');
}
