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
    <div class="row">
        <div class="inspiration col-md-6">
            <img class="background-pic" src="images/logBackground.png">
        </div>

        <div class="register form-group col-md-6">
            <form action="functions/register_user.php" method="POST">
                <?php include('errors.php'); ?>
                <label class="form-text-info">Username:</label><br>
                <input class="form-control" type="text" name="username"><br><br>
                <label class="form-text-info">E-mail:</label><br>
                <input class="form-control" type="email" name="email"><br><br>
                <label class="form-text-info">Password:</label><br>
                <input class="form-control" type="password" name="password"><br><br>
                <label class="form-text-info">Password (confirm):</label><br>
                <input class="form-control" type="password" name="password2"><br>
                <br>
                <input class="btn btn-success" type="submit" name="register"><br><br>
            </form>

            <label>Already have an account? Sign in <a class="links" href="login.php">here</a>.</label>
        </div>
    </div>
</div>
</body>
</html>