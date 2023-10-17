<?php
function generateSlug($string) {
    $string = strtolower($string);
    $string = str_replace(' ', '-', $string);
    $string = preg_replace('/[^a-z0-9\-]/', '', $string);
    return $string;
}