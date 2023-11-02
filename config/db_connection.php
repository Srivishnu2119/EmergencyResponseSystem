<?php
ob_start();
session_start();
error_reporting(0);

if ($_SERVER['SERVER_NAME'] == 'localhost') {
    $dsn = 'mysql:host=localhost;dbname=hospital';
    $username = 'root';
    $password = '';
} else {


    $dsn = 'mysql:host=localhost;dbname=hospital';
    $username = 'root';
    $password = '';
}
$options = array(
    PDO::ATTR_PERSISTENT => true,
);
//$pdo = new PDO($dsn, $username, $password,$options);
$pdo = new PDO($dsn, $username, $password, $options);
$pdo->setAttribute(PDO::ATTR_CASE, PDO::CASE_UPPER); // Set the column names to be returned uppercase
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       // Sets exception mode for errors
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);  // Display the query
$pdo->exec("SET CHARACTER SET utf8");      // Sets encoding UTF-8

$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
