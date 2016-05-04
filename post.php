<?php

$username = $_POST["username"];
$password = $_POST["password"];
if( ($username === "realtime") && ($password === "02509371"))
{
    echo("username and password is correct");
}
else 
{
    echo("username or password is not correct");
}

?>