<?php

require_once('../db/config.php');
require_once('./function/functions.php');
$con = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
echo("<a href=''>balling</a>");

// Example usage to generate and store a slug in your database
$title = "Your Item Title";
$slug = generateSlug($title);

echo $slug;