<?php
require_once('../db/config.php');
require_once('./function/functions.php');

$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$requestUri = $_SERVER['REQUEST_URI'];
$urlPath = parse_url($requestUri, PHP_URL_PATH);
$urlPath = generateSlug($urlPath);
if ($urlPath === '/' || $urlPath === '') {
    header("Location: http://localhost:8080/catalog/cat.php");
    exit();
}
$sql = "SELECT * FROM cake where url = '" . $urlPath . "';";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <?php
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo '<article><img src="' . $row["img"] . '"></img><h2>' .  $row["title"] . '</h2><p>' .  $row["disc"] . '</p></article>';
            }
          } else {
            echo "0 results";
          }
    ?>
</body>
</html>