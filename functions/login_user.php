<?php
session_start();
include 'config.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
    $result = $conn->query($sql);
    $count = $result->num_rows;

    $row = $result->fetch_assoc();

    if ($count > 0) {
        $_SESSION['email'] = $row['email'];
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['message'] = "Successfully logged in. Welcome ". $row['email'];
        header("location: ../index.php");
    } else {
        $_SESSION['message'] = "Wrong credentials";
        header("location: ../login.php");
    }
}
$conn->close();
?>