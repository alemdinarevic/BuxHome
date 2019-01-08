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

    <header class="row">
        <div class="col-md-4">
            <form class="searchbar" action="/action_page.php">
                <input class="search form-control" type="text" placeholder="Search.." name="search">
            </form>
        </div>

        <div class="col-md-4">
            <h3 class="pgtitle">BuxHome</h3>
        </div>

        <div class="col-md-4 navbar-main">
            <ul class="nav-bar">
                <li><a href="#">BookFeed</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </header>

    <div class="container">

        <?php if(isset($_SESSION['email'])): ?>
           <p> <i> <?php echo $_SESSION['message']; ?></i></p>
            <p> <i> <?php echo "Welcome " . $_SESSION['email']; ?></i></p>
            <?php $_SESSION['message'] = '' ?>


        <div class="row">
            <div class="row-book">
                <div class="info">
                    <h1>Algorithms and data structures,<br>Thomas H. Cormen</h1>
                    <p>This is the most popular book for developing
                        and designing great algorithms.</p>
                    <!--<p font-style="italic">Uploaded by: username. <br>17:09pm</p>-->
                </div>
                <div class="image">
                    <image class="book-image" src="images/book1.png"></image>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-book">
                <div class="info">
                    <h1>Name, Author</h1>
                    <p>Description</p>
                </div>
                <div class="image">
                    <image class="book-image" src="images/book1.png"></image>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-book">
                <div class="info">
                    <h1>Name, Author</h1>
                    <p>Description</p>
                </div>
                <div class="image">
                    <image class="book-image" src="images/book1.png"></image>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="row-book">
                <div class="info">
                    <h1>Name, Author</h1>
                    <p>Description</p>
                </div>
                <div class="image">
                    <image class="book-image" src="images/book1.png"></image>
                </div>
            </div>
        </div>
    </div>
    <?php else:  header("location: login.php");?>
    <?php endif; ?>




</body>
</html>