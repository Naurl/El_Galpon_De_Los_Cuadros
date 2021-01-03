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
  <!-- <script src="https://code.jquery.com/jquery-1.9.1.min.js" integrity="sha256-wS9gmOZBqsqWxgIVgA8Y9WcQOa7PgSIX+rPA0VL2rbQ=" crossorigin="anonymous"></script> -->
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="scripts/products/products_events.js"></script>
</body>
</html>
