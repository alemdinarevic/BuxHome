<?php
include 'config.php';
$id = $_SESSION['user_id'];

$sql = "SELECT image FROM user where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $image = <<<DELIMETER
       <img class="profile-pic" src="images/profile_pics/{$row['image']}">
            <p class="profile-description"> <b> {$_SESSION['username']}  </b> </p>
             <p class="profile-description"> {$_SESSION['email']} </p>
DELIMETER;
      echo $image;
    }
} else {
    echo "0 results";
}

$conn->close();
?>