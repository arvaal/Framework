<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

function debag(string $str) {
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}