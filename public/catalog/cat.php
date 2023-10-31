<?php
require_once('../../db/config.php');
require_once('../function/functions.php');
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../index.css">
</head>
<body style="display:flex; gap:2rem;">
    <?php
    $sql = "SELECT * FROM mainPage";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo '<article><img src="' . $row["img"] . '"></img><h2>' .  $row["title"] . '</h2><a href="http://localhost:8080/' . $row['url']  . '">Go To Page</a></article>';
      }
    } else {
      echo "0 results";
    }
    ?>
    <p></p>
</body>
</html>