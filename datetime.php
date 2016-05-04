<?php

$date = date('D/M/Y');
$time = date('H:i:s');

trace($date);
trace($time);


function trace($string)
{
    echo $string . '<br>';
}

?>