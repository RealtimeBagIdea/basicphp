<?php

$time = time();
echo $time;



//setcookie(name, value, expaire);
setcookie('student', 'Mark', $time + 10);

?>