<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Home Page</title>
    
    <?php include "header.html" ?>
  </head>

  <body>
<div>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  
<?php
$servername = "localhost";
$username = "root";

$dbname = "oldbooks";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT bookname,author,publisher,price FROM books";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["bookname"]. " - Name: " . $row["author"]. " " . $row["publisher"].$row["price"]." ". "<br>";
    echo "<tr>";
                echo "<td>" . $row['bookname'] . "</td>";
                echo "<td>" . $row['author'] . "</td>";
                echo "<td>" . $row['publisher'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
            echo "</tr>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</div>

  </body>
</html>