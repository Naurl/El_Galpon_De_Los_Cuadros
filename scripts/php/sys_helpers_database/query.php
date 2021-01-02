<?php

    require('scripts/php/sys_helpers_database/connection.php');

    //Variable de búsqueda
    $consultaBusqueda = $_POST['filterValue'];
    $tablaConsulta = $_POST['table'];
    $filterField = $_POST['filterField'];

    //Filtro anti-XSS
    $caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
    $caracteres_buenos = array("&lt;", "&gt;", "&quot;", "&#x27;", "&#x2F;", "&#060;", "&#062;", "&#039;", "&#047;");
    $consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

    //Variable vacía (para evitar los E_NOTICE)
    $mensaje = array();

    //Comprueba si $consultaBusqueda está seteado
    if (isset($consultaBusqueda)) {
        $sqlFilter = "SELECT * FROM $tablaConsulta
        WHERE $filterField LIKE '%$consultaBusqueda%'
        ";

        $consulta = mysqli_query($connection, $sqlFilter);

        if($consulta)
        {
            //Obtiene la cantidad de filas que hay en la consulta
            $filas = mysqli_num_rows($consulta);

            //Si no existe ninguna fila que sea igual a $consultaBusqueda, entonces mostramos el siguiente mensaje
            if ($filas === 0) {
                $mensaje = "No hay registros para la busqueda realizada. Tabla: $tablaConsulta -- Filter: $sqlFilter";
            } else {
                //La variable $resultado contiene el array que se genera en la consulta, así que obtenemos los datos y los mostramos en un bucle
                while($row = mysqli_fetch_array($consulta)) {
                    $mensaje[] = $row;
                }//Fin while $row
            }//Fin else $filas
            
        }
        else
        {
            $mensaje = "Hubo un error en la consulta realizada. Tabla: $tablaConsulta -- Filter: $sqlFilter";
        }
        
        //Devolvemos el mensaje que tomará jQuery
        echo json_encode($mensaje);
    }
?>