<?php
/**
 * Connection to the database
 */
try {
    $pdo = new PDO('mysql:host=localhost;dbname=flowgwidb;', 'flowmar0211', 'newpass0211');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
} catch (PDOException $e) {
    $error = "Unable to connect to the database server.";
    include $_SERVER['DOCUMENT_ROOT'].'/includes/error.html.php';
    exit();
}
