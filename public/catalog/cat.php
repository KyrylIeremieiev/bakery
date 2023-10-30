<?php
require_once('../../db/config.php');
require_once('../function/functions.php');
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Example usage to generate and store a slug in your database
$title = "Your Item Title";
$slug = generateSlug($title);
/* 
echo $slug; */
$img = ['..', '.1', '.2'];
$title = ['myTitle', 'nah', 'this'];
$link = ["http://localhost:8080/cake1", "http://localhost:8080/cake2", "http://localhost:8080/cake3"];
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
        echo '<article><img src="' . $row["img"] . '"></img><h2>' .  $row["title"] . '</h2><a href="' .  $row["url"] . '">Go To Page</a></article>';
      }
    } else {
      echo "0 results";
    }
    ?>
    <p></p>
</body>
</html>