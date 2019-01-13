<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BuxHome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
</head>
<body>
 <?php if(isset($_SESSION['message'])): ?>
        <div class="alert alert-success" role="alert">
            <p> <i> <?php echo $_SESSION['message']; ?></i></p>
            <?php unset($_SESSION['message']); ?>
        </div>
    <?php endif;?>

<?php include 'templates/navbar.php';?>

    <div class="profile">

        <div class="profile-info">
            <?php include 'functions/fetch_profile_photo.php';?>
            <br>
            <p>Change profile picture</p>
            <form method="POST" action='functions/change_profile_photo.php' enctype="multipart/form-data">
                <input  type="file" name="profile_pic">
                <input class= "btn btn-success" type="submit" name="submit">
            </form>

        </div>
        <div class="profile-posts">
            <?php include 'functions/book_per_user.php';?>
        </div>

    </div>

</body>
</html>