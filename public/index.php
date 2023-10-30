<?php

/* require_once('../db/config.php');
require_once('./function/functions.php');
$con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
echo("<a href=''>balling</a>");

// Example usage to generate and store a slug in your database
$title = "Your Item Title";
$slug = generateSlug($title);

echo $slug;
$img = ['..', '.1', '.2'];
$title = ['myTitle', 'nah', 'this'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <article>
        <?php
            echo '<img src="' . $img[0] . '"></img>';
            echo '<h2>' . $title[0] . "</h2>";
            echo '<a>Go To Page</a>';
        ?>
    </article>
</body>
</html>
 */

 $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if(str_contains($url, 'cake1')){
    echo('cake1');
}