<?php
require_once('../../db/config.php');
require_once('../function/functions.php');
$con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

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
</head>
<body style="display:flex; gap:2rem;">]
    <article>
        <?php
            echo '<img src="' . $img[0] . '"></img><h2>' . $title[0] . '</h2><a href="' . $link[0] . '">Go To Page</a>';
        ?>
    </article>
    <article>
        <?php
            echo '<img src="' . $img[1] . '"></img><h2>' . $title[1] . '</h2><a href="' . $link[1] . '">Go To Page</a>';
        ?>
    </article>
    <article>
        <?php
            echo '<img src="' . $img[2] . '"></img><h2>' . $title[2] . '</h2><a href="' . $link[2] . '">Go To Page</a>';
        ?>
    </article>
    <p></p>
</body>
</html>