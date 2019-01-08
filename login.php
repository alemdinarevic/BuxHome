<?php
session_start();
$db = mysqli_connect('localhost', 'root', 'root', 'buxhome');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM user WHERE email = '$email' and password = '$password'";
    $result = mysqli_query($db, $sql) or die(mysqli_error($db));
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['message'] = "Successfully logged in";
        header("location: index.php");
    } else {
        $_SESSION['message'] = "Not Successfully logged in";
        header("location: login.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to BuxHome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
</head>
<body>

<header>
    <div class="container">

        <div class="row">
            <div class="col-md-7">
                <h3 class="pgtitle">BuxHome</h3>
            </div>
        </div>
    </div>

</header>

<div class="container">
    <?php if(isset($_SESSION['message'])): ?>
        <p> <i> <?php echo $_SESSION['message']; ?></i></p>

    <?php endif; ?>
    <div class="row">
        <div class="inspiration col-md-6">
            <img class="background-pic" src="images/logBackground.png">
        </div>

        <div class="login form-group col-md-6">
            <form action="login.php" method="POST">
                <?php include('errors.php'); ?>
                <label class="form-text-info">E-mail:</label><br>
                <input class="form-control" type="email" name="email"><br><br>
                <label class="form-text-info">Password:</label><br>
                <input class="form-control" type="password" name="password" value=""><br><br>
                <br>
                <input class="btn btn-success" type="submit" name="login"><br><br>
            </form>

            <label>Don't have an account? Register <a class="links" href="register.php">here</a>.</label>
        </div>
    </div>
</div>
</body>
</html>