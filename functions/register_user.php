<?php
session_start();
include 'config.php';

if (isset($_POST['register'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $sql = "INSERT into user(username, email, password) VALUES ('$username', '$email', '$password')";

    $result = $conn->query($sql);

    $user = mysqli_fetch_assoc($result);

    if ($user) {
        if ($user['username'] === $username) {
            $_SESSION['message'] = "User was not created, maybe duplicate";
            header("location: ../index.php");
        }
    }else {
        $_SESSION['message'] = "Succesfully created user";
        $_SESSION['user'] = $username;
        header("location: ../index.php");
    }


}
$conn->close();
?>