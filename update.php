<?php

require_once('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = $conn->prepare("select username,password from users where id=$id");
    $query->execute();

    $test = $query->fetch();
};





if (isset($_POST['update'])) {

    $name = $_POST['username'];
    $pass = $_POST['password'];
    $id = $_POST['iduser'];
    $sql = "UPDATE users SET username='$name' , password='$pass'  WHERE id=$id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    echo 'updated succesfully';
    header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="./update.php" method="POST">
        <input type="hidden" name="iduser" value="<?= isset($test) ? $id : '' ?>">
        <input type="text" name="username" value="<?= isset($test) ? $test['username'] : '' ?>">
        <input type="text" name="password" value="<?= isset($test) ? $test['password'] : '' ?>">

        <input type="submit" name="update" value="update">

    </form>
</body>

</html>