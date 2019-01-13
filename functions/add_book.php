<?php
session_start();

include 'config.php';

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $date = date("Y/m/d");
    $user_id = $_SESSION['user_id'];
    $target = basename($_FILES['image']['name']);

    $sql = "INSERT into books(title, author, description, image, created_by, created_at) VALUES ('$title', '$author', '$description', '$image','$user_id', '$date')";

    $result = $conn->query($sql);
    $user = mysqli_fetch_assoc($result);

    move_uploaded_file($_FILES['image']['tmp_name'], '/Applications/MAMP/htdocs/Buxhome/images/books/' . $target);


    $_SESSION['message'] = "Succesfully uploaded book";
    header("location: ../index.php");

}
$conn->close();

?>