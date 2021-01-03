<?php

    require('scripts/php/sys_helpers_database/connection.php');
    require('scripts/php/sys_helpers_database/product_table.php');

    //Variable de búsqueda
    $filterValue = $_POST['filterValue'];
    $queryTable = $_POST['table'];
    $filterField = $_POST['filterField'];

    //Filtro anti-XSS
    $bad_characters = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
    $great_characters = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
    $filterValue = str_replace($bad_characters, $great_characters, $filterValue);

    //Variable vacía (para evitar los E_NOTICE)
    $message = "";

    //Comprueba si $filterValue está seteado
    if (isset($filterValue)) {
        $sqlFilter = "SELECT * FROM $queryTable
        WHERE $filterField LIKE '%$filterValue%'
        ";
    }
    else {
        $sqlFilter = "SELECT * FROM $queryTable";
    }

    $query = mysqli_query($connection, $sqlFilter);

    if($query)
    {
        //Obtiene la cantidad de rows que hay en la query
        $rows = mysqli_num_rows($query);

        //Si no existe ninguna fila que sea igual a $filterValue, entonces mostramos el siguiente message
        if ($rows === 0) {
            $message = "<div>No hay registros para la busqueda realizada. Tabla: $queryTable -- Filter: $sqlFilter</div>";
        } else {
            //La variable $resultado contiene el array que se genera en la query, así que obtenemos los datos y los mostramos en un bucle
            while($row = mysqli_fetch_array($query)) {

                $message .= product_record_to_html($row);

            }//Fin while $row
        }//Fin else $rows
        
    }
    else
    {
        $message = "<div>Hubo un error en la query realizada. Tabla: $queryTable -- Filter: $sqlFilter</div>";
    }
    
    //Devolvemos el message que tomará jQuery
    echo $message;
?>