<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BuxHome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">

</head>
<body>

<?php include 'navbar.php';?>


<div class="container">
    <div class="row">
        <div class="inspiration col-md-6">
            <img class="background-pic" src="images/logBackground.png">
        </div>

        <div class="register form-group col-md-6">
            <h1>Add new Book</h1>
            <form action="add.php" method="POST">
                <?php include('errors.php'); ?>
                <label class="form-text-info">Title:</label><br>
                <input class="form-control" type="text" name="title"><br><br>
                <label class="form-text-info">Author:</label><br>
                <input class="form-control" type="text" name="autor"><br><br>
                <label class="form-text-info">Description:</label><br>
                <input class="form-control" type="text" name="description"><br><br>
                <label class="form-text-info">Image:</label><br>
                <input class="form-control" type="text" name="file"><br>
                <br>
                <input class="btn btn-success" type="submit" name="Add"><br><br>
            </form>
        </div>
    </div>
</div>
</body>
</html>