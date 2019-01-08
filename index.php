<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BuxHome</title>
    <meta name="description" content="We are the best Book buying-selling page on the web, guaranteed! Second-hand">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php include 'navbar.php';?>

    <div class="container">

        <?php if(isset($_SESSION['email'])): ?>
           <p> <i> <?php echo $_SESSION['message']; ?></i></p>
            <p> <i> <?php echo "Welcome " . $_SESSION['email']; ?></i></p>
            <?php $_SESSION['message'] = '' ?>

        <?php include 'fetch_books.php';?>

    </div>
    <?php else:  header("location: login.php");?>
    <?php endif; ?>




</body>
</html>