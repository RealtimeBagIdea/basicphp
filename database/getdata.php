<?php
require ('connect.php');

$sql = "SELECT * FROM user_info WHERE Name = 'Chanon'";


if($result = $database->query($sql))
{
    while($obj = $result->fetch_assoc())
    {
        echo $obj['Name'] . $obj['Username'] . "<br>";
    }
    $result->close();
}

?>