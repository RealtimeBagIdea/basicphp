<?php
    session_start();
    $name = $_SESSION['Name'];
    $ages = $_SESSION['Ages'];
    
    echo $name;
?>