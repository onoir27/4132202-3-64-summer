<!-- conDB.php --> 
<?php

$host = "mysql";
$user ="root";
$pass = "1234";
$db = "db_test0";
$port = 3406;

try {
    $mysali = new mysqli($host, $user, $pass, $db, $port);
    $mysali->query("SET NAMES utf8");
} catch (Exception $e) {
    echo $e->getMessage();
}
