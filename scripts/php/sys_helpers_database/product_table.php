
<?php
    function product_record_to_html($tableRecord)
    {
        $html = "";

        $id = $tableRecord['id'];
        $name = $tableRecord['name'];
        $type = $tableRecord['type'];
        $category = $tableRecord['category'];
        $stock = $tableRecord['stock'];
        $description = $tableRecord['description'];
        $picture = $tableRecord['picture'];
        $pictureFormat = $tableRecord['pictureFormat'];

        $html .= "<a href=\"#\" class=\"post\">
            <figure class=\"post-image\">
                <img src=\"images/Cuadros/$picture\" alt=\"\">
            </figure>
            <h1>$name</h1>
                <p>
                    <b>ID: </b>$id<br>
                    <b>Nombre: </b>$name<br>
                    <b>type: </b>$type<br>
                    <b>category: </b>$category><br>
                    <b>stock: </b>$stock<br>
                    <b>description: </b>$description<br>
                </p>
        </a>";

        return $html;
    }
?>
