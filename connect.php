<?php
$db_driver="mysql";
$host = "localhost";
$database = "iteh2lb1var4";
$dsn = "$db_driver:host=$host; dbname=$database";
$username = "root"; $password = "";

try 
{
    $dbh = new PDO ($dsn, $username, $password);
}
catch (PDOException $e) 
{
    echo "Error!: " . $e->getMessage() . "<br/>"; 
    die();
}
?>