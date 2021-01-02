<section>
    <div class = "cuadros_ordenamiento">
        <div>
            Mostrando
        </div>
        <div>
            Boton de ordenamiento
        </div>
        <select name=” optionlist ” onChange=”combo(this, ’demo’)”>
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option> option 4 </option>
        <option> option 5 </option>
        </select>
    </div>
</section>
<section class="post-list" id="productList">
<?php
    if($connection)
    {
        $consulta = "SELECT * FROM cuadros";
        $resultado = mysqli_query($connection,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id'];
                $name = $row['name'];
                $type = $row['type'];
                $category = $row['category'];
                $stock = $row['stock'];
                $description = $row['description'];
                $picture = $row['picture'];
                $pictureFormat = $row['pictureFormat'];
                ?>

                <a href="#" class="post">
                    <figure class="post-image">
                        <img src="images/cuadros/<?php echo $picture; ?>" alt="">
                    </figure>
                    <h1><?php echo $name; ?></h1>
                        <p>
                            <b>ID: </b> <?php echo $id; ?><br>
                            <b>Nombre: </b> <?php echo $name; ?><br>
                            <b>type: </b> <?php echo $type; ?><br>
                            <b>category: </b> <?php echo $category; ?><br>
                            <b>stock: </b> <?php echo $stock; ?><br>
                            <b>description: </b> <?php echo $description; ?><br>
                        </p>
                </a>
                
                <?php
            }
        }
    }
?>

</section>