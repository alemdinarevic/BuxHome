<?php
include 'config.php';
$id = $_GET['id'];

$sql = "SELECT * FROM books where id = '$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $book = <<<DELIMETER
      <div class="row">
            <div class="row-book">
                <div class="info">
                    <h1> {$row["title"]},<br> {$row["author"]}</h1>
                    <p>{$row["description"]}</p>
                    <!--<p font-style="italic">Uploaded by: username. <br>17:09pm</p>-->
                    <br>
                    <h1>Price: {$row["price"]} $</h1>
                    <a class="btn btn-success" href='https://www.paypal.com'>Buy here</a>
                </div>
                <div class="image">
                    <a href="book.php?id={$row['id']}"> <image class="book-image" src="images/books/{$row['image']}"></image></a>
                </div>
            </div>
        </div>
DELIMETER;
      echo $book;
    }
} else {
    echo "0 results";
}

$conn->close();
?>