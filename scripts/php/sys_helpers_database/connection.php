<?php
    $host = "localhost";
    $user = "root";
    //$user = "id15801236_nacu1995";//Only for deployments
    $pass = "";
    //$pass = "_D?2iB|e-7zy_mY@";//Only for deployments
    $db = "el_galpon_cuadros_db";
    //$db = "id15801236_el_galpon_cuadros_db";//Only for deployments
    $connection = mysqli_connect($host, $user, $pass, $db);

    if(!$connection)
    {
    echo "Todooo maaaal!!";
    }
?>