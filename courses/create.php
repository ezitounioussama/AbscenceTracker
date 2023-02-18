<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../inc/db.php';

if (isset($_POST['submit'])) {
    $course_name = $_POST['course_name'];
    $id_user = $_POST['id_user'];

    // handle file upload
    if (isset($_FILES['course_image'])) {
        $errors = array();
        $file_name = $_FILES['course_image']['name'];
        $file_size = $_FILES['course_image']['size'];
        $file_tmp = $_FILES['course_image']['tmp_name'];
        $file_type = $_FILES['course_image']['type'];
        $file_ext = strtolower(end(explode('.', $_FILES['course_image']['name'])));
        $extensions = array("jpeg", "jpg", "png", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG, PNG, or GIF file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be less than 2 MB';
        }

        if (empty($errors) === true) {
            $new_file_name = time() . "_" . $file_name;
            move_uploaded_file($file_tmp, "../images/" . $new_file_name);

            $stmt = $conn->prepare('INSERT INTO courses (course_name, id_user, course_image_path) VALUES (?, ?, ?)');
            $stmt->execute([$course_name, $id_user, $new_file_name]);

            header('Location: index.php');
            exit();
        } else {
            echo implode(", ", $errors);
        }
    } else {
        $stmt = $conn->prepare('INSERT INTO courses (course_name, id_user) VALUES (?, ?)');
        $stmt->execute([$course_name, $id_user]);

        header('Location: index.php');
        exit();
    }
}
