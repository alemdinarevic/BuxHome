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
<div class="container">
    <?php if(isset($_SESSION['message'])): ?>
        <p> <i> <?php echo $_SESSION['message']; ?></i></p>

    <?php endif; ?>
    <div class="row">
        <div class="inspiration col-md-6">
            <img class="background-pic" src="images/logBackground.png">
        </div>

        <div class="login form-group col-md-6">
            <form action="functions/login_user.php" method="POST">
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