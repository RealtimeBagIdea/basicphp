<?php

$name = "Mark";

trace($name);

showName();
function showName()
{
    global $name;
    trace('The name of global is ' . $name);    
}

function trace($string)
{
    echo $string . '<br>';
}

?>