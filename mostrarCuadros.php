<?php
    if($connection)
    {
        $consulta = "SELECT * FROM users";
        $resultado = mysqli_query($connection,$consulta);
        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
            $id = $row['userID'];
            $password = $row['password'];
            $email = $row['email'];
            $name = $row['name'];
            ?>
            <div>
                <h2><?php echo $name; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $id; ?><br>
                        <b>Nombre: </b> <?php echo $name; ?><br>
                        <b>Email: </b> <?php echo $email; ?><br>
                        <b>Contraseña: </b> <?php echo $password; ?><br>
                    </p>
                </div>
            </div> 
            <?php
            }
        }

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
            <div>
                <h2> Nombre del cuadro <?php echo $name; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $id; ?><br>
                        <b>Nombre: </b> <?php echo $name; ?><br>
                        <b>type: </b> <?php echo $type; ?><br>
                        <b>category: </b> <?php echo $category; ?><br>
                        <b>stock: </b> <?php echo $stock; ?><br>
                        <b>description: </b> <?php echo $description; ?><br>
                        <img src="images/<?php echo $picture; ?>">
                    </p>
                    
                </div>
            </div> 
            <?php
            }
        }
    }
?>