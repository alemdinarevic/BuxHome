<?php
include 'config.php';

$sql = "SELECT id, title, author, description FROM books";
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
                </div>
                <div class="image">
                    <image class="book-image" src="images/book1.png"></image>
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