<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '02509371';

$database = new mysqli($mysql_host, $mysql_user, $mysql_pass, 'student');

if ($database->connect_errno)
{
    echo "Failed to connect to MySQL: " . $database->connect_error;
    exit();
}

?>