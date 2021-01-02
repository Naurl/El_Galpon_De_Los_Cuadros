<!DOCTYPE html>
<html lang="es">

<?php 
    include("header.php");
?>

<body>
    
  <?php 
  include("scripts/php/sys_helpers_database/connection.php");
  ?>

  <section class="products">
    <div class= "filter">
        <form accept-charset="utf-8" method="POST">
            <div>
                <p>¿Que cuadro buscas?</p>
                <input type="text" id="searchByName_text">
                <input type="button" id="searchByName_btn" value="Buscar">
            </div>
            <div>
                <p>Filtrar por precio</p>
                <input type="range">
                <input type="button" value="Filtrar">
                <p>Precio: $ 0 -- $ 16900</p>
            </div>
        </form>
    </div>
    <div>
        <?php
            include("show_products.php");
        ?>
    </div>
  </section>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script src="scripts/products/products_events.js"></script>
</body>
</html>
