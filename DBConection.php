<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "el_galpon_cuadros_db";
    $connection = mysqli_connect($host, $user, $pass, $db);

    if($connection)
    {
    echo "Todooo correctoo!!";
    }
    else
    {
    echo "Todooo maaaal!!";
    }
?>