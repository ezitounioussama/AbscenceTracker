<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once('inc/db.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $query = "SELECT id, email, password FROM users WHERE email = :email";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump(password_verify($pass, $result['password']));

    if ($result && $pass == $result['password']) {

        session_start();
        $_SESSION['user_id'] = $result['id'];
        $_SESSION['user_email'] = $result['email'];
        header('Location: students/');
        exit();
    } else {
        // Authentication failed
        // Show an error message or redirect to a login page
        echo "Invalid email or password. Please try again.";
        exit();
    }
}
