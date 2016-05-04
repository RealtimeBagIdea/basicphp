<?php

if( isset($_GET['name']) && isset($_GET['age']) && isset($_GET['weight']))
{
    $name = $_GET['name'];
    $age = $_GET['age'];
    $weight = $_GET['weight'];
    
    if(!empty($name) && !empty($age) && !empty ($weight))
    {
        echo($name . '<br>');
        echo($age . '<br>');
        echo($weight . '<br>');
    }
    else 
    {
        echo("please Enter all field");   
    }
}


?>