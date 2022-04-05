<?php

// Database parameters
$driver = "mysql";
$host = "db";
$username = "app";
$password = "PasswordExample";
$db = "app";

function getDbConnection() {
    global $driver, $host, $username, $password, $db;
    $dsn = "$driver:dbname=$db;host=$host";

    return new PDO($dsn, $username, $password);
}

?>
