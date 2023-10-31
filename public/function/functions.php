<?php
function generateSlug($text) {
    // Replace spaces with dashes
    $text = str_replace(" ", "-", $text);
    // Remove special characters
    $text = preg_replace('/[^A-Za-z0-9\-]/', '', $text);
    // Convert to lowercase
    $text = strtolower($text);
    return $text;
}