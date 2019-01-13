<?php
session_start();

include 'config.php';

if (isset($_POST['submit'])) {

    $image = $_FILES['profile_pic']['name'];
    $user_id = $_SESSION['user_id'];
    $target = '/Applications/MAMP/htdocs/Buxhome/images/profile_pics/' . basename($_FILES['profile_pic']['name']);

    $sql = "UPDATE user SET image = '$image' WHERE id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $target)){
        echo 'yes, works';
    }
    else{
        echo "does not work";
    }


    $_SESSION['message'] = "Succesfully updated profile photo";
    header("location: ../profile.php");

}
$conn->close();

?>