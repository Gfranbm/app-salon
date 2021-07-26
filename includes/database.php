<?php


    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "appsalon";
    
    $con = mysqli_connect($host, $user, $pass, $db);
    if (!$con){
        echo"error de conexion";
        exit;
    }
